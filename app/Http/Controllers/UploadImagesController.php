<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadImage;
use File;

// Class for upload images
class UploadImagesController extends Controller
{
    public function index()
    {
        return view('img-upload');
    }

    public function store(Request $request)
    {

        $keywords = $request->cwPicsKeywords;

        if( $request->hasFile('cwUploadPics') ) {
            foreach( $request->file('cwUploadPics') as $file ) {

                $UploadImage = UploadImage::latest('id')->first();
                $count_image = $UploadImage->id;
                $default_filename = $file->getClientOriginalName();
                $filename  = pathinfo($default_filename, PATHINFO_FILENAME);
                $fileName = preg_replace('/[0-9()]+/', '', $filename);
                if( $count_image >= 100000000  ) {
                    $orignal_img_name = 'Original_' . $count_image + 1;
                    $tumb_img_name = 'Thumb_' . $count_image + 1;
                } elseif( $count_image >= 10000000 ) {
                    $orignal_img_name = 'Original_0' . $count_image + 1;
                    $tumb_img_name = 'Thumb_0' . $count_image + 1;
                } elseif( $count_image >= 1000000 ) {
                    $orignal_img_name = 'Original_00' . $count_image + 1;
                    $tumb_img_name = 'Thumb_00' . $count_image + 1;
                } elseif( $count_image >= 100000 ) {
                    $orignal_img_name = 'Original_000' . $count_image + 1;
                    $tumb_img_name = 'Thumb_000' . $count_image + 1;
                } elseif( $count_image >= 10000 ) {
                    $orignal_img_name = 'Original_0000' . $count_image + 1;
                    $tumb_img_name = 'Thumb_0000' . $count_image + 1;
                } elseif( $count_image >= 1000 ) {
                    $orignal_img_name = 'Original_00000' . $count_image + 1;
                    $tumb_img_name = 'Thumb_00000' . $count_image + 1;
                } elseif( $count_image >= 10 ) {
                    $orignal_img_name = 'Original_000000' . $count_image + 1;
                    $tumb_img_name = 'Thumb_000000' . $count_image + 1;
                } elseif( $count_image <= 9 ) {
                    $orignal_img_name = 'Original_0000000' . $count_image + 1;
                    $tumb_img_name = 'Thumb_0000000' . $count_image + 1;
                } else {
                    $orignal_img_name = 'Original_00000001';
                    $tumb_img_name = 'Thumb_00000001';
                }
                $orignal_img = $orignal_img_name . '.' . $file->getClientOriginalExtension();
                $path = public_path('/storage/uploads/') . $orignal_img;
                $file->move(public_path('/storage/uploads'), $orignal_img);

                $tumb_img = $tumb_img_name . '.' . $file->getClientOriginalExtension();
                $tumb_path = public_path('/storage/uploads/tumb/') . $tumb_img;

                $thumb_width = 100;
                $thumb_height = 100;

                if( $file->getClientOriginalExtension() == 'gif' ) {
                    $img_path = ImageCreateFromGIF($path);
                    $width = ImageSx($img_path);          // Original picture width is stored
                    $height = ImageSy($img_path);        // Original picture height is stored
                    $thumb_height = ($thumb_width / $width) * $height; // Add this line to maintain aspect ratio
                    $newimage = imagecreatetruecolor($thumb_width, $thumb_height);
                    imageCopyResized($newimage, $img_path, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
                    if (function_exists("imagegif")) {
                        Header("Content-type: image/gif");
                        ImageGIF($newimage, $tumb_path);
                    } elseif (function_exists("imagejpeg")) {
                        Header("Content-type: image/jpeg");
                        ImageJPEG($newimage, $tumb_path);
                    }
                    chmod("$tumb_path", 0777);
                }

                if( $file->getClientOriginalExtension() == 'jpeg' || $file->getClientOriginalExtension() == 'jpg' ) {
                    $img_path = imagecreatefromjpeg($path);
                    $width = ImageSx($img_path);          // Original picture width is stored
                    $height = ImageSy($img_path);        // Original picture height is stored
                    $thumb_height = ($thumb_width / $width) * $height; // Add this line to maintain aspect ratio
                    $newimage = imagecreatetruecolor($thumb_width, $thumb_height);
                    imageCopyResized($newimage, $img_path, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
                    imagejpeg($newimage, $tumb_path);
                    chmod("$tumb_path", 0777);
                }

                if( $file->getClientOriginalExtension() == 'png' ) {
                    $img_path = imagecreatefrompng($path);
                    $width = ImageSx($img_path);          // Original picture width is stored
                    $height = ImageSy($img_path);        // Original picture height is stored
                    $thumb_height = ($thumb_width / $width) * $height; // Add this line to maintain aspect ratio
                    $newimage = imagecreatetruecolor($thumb_width, $thumb_height);
                    imageCopyResized($newimage, $img_path, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
                    imagepng($newimage, $tumb_path);
                    chmod("$tumb_path", 0777);
                }

                if( empty( $keywords ) ) {
                    $keyword = $fileName;
                } else {
                    $keyword = $keywords;
                }

                UploadImage::create([
                    'filename' => $orignal_img,
                    'tumb' => $tumb_img,
                    'keywords' => $keyword
                ]);
            }
        }

        return back()->with('success', 'Pictures has been successfully added!');
    }

    public function view() {
        $UploadImage = UploadImage::paginate(10);
        return view('img-upload', ['UploadImage' => $UploadImage]);
    }

    public function destroy($id) {
        if( !empty($id) ) {
            $UploadImage = UploadImage::where('id', $id)->first();
            $orignal_path = public_path('/storage/uploads/') . $UploadImage->filename;
            $tumb_path = public_path('/storage/uploads/tumb/') . $UploadImage->tumb;
            File::delete($orignal_path);
            File::delete($tumb_path);
            $image = UploadImage::find($id);
            $image->delete();
            return response()->json([
                'success' => 'Data has been successfully deleted!',
                'error' => 'Some problem occur on your server!'
            ]);
        }
    }

}