<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UploadImage;

class TaskImgCroppedController extends Controller 
{

    public function index() {
        return view('task-cw-img-crop');
    }

    public function view() {
        $images = [
            ['2400x1440', '0'],
            ['2400x1000', '0'],
            ['2400x750', '0'],
            ['2400x500', '0'],
            ['600x600', '0'],
            ['450x600', '0'],
        ];
        $TotalImages = UploadImage::where($images);
        $UploadImage = UploadImage::where($images)->paginate(10);
        return view('task-cw-img-crop', ['UploadImage' => $UploadImage, 'TotalImages' => $TotalImages]);
    }
    
    public function getimage($id)
    {
        $SelectedImage = UploadImage::where('id', $id)->first();
        return response()->json([
            'status' => true,
            'UploadImage' => $SelectedImage
        ]);
    }

    public function cropimage(Request $request)
    {
        $id = $request->id;
        $base64data = $request->crop_image;
        $width = $request->width;
        $height = $request->height;

        $image_parts = explode(";base64,", $base64data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        if( $width == '2400' && $height == '1440' ) {

            $img_path = public_path('/storage/uploads/2400X1440/') . $width.'x'.$height.'-'.$id.'.png';
            file_put_contents($img_path, $image_base64);
            $col_name = '2400x1440';
            $step = '1';

            $img_path1 = public_path('/storage/uploads/1920X1150/');
            $img_name1 = '1920x1150-'.$id.'.png';
            $path1 = $img_path1 . $img_name1;
            $col_name1 = '1920x1150';
            $this->cwCropSizes($img_path, $path1, 1920, 1150);

            $img_path2 = public_path('/storage/uploads/500X300/');
            $img_name2 = '500x300-'.$id.'.png';
            $path2 = $img_path2 . $img_name2;
            $col_name2 = '1920x1150';
            $this->cwCropSizes($img_path, $path2, 500, 300);

        } elseif( $width == '2400' && $height == '1000' ) {

            $img_path = public_path('/storage/uploads/2400X1000/') . $width.'x'.$height.'-'.$id.'.png';
            file_put_contents($img_path, $image_base64);
            $col_name = '2400x1000';
            $step = '2';

            $img_path2 = public_path('/storage/uploads/1920X800/');
            $img_name2 = '1920x800-'.$id.'.png';
            $path2 = $img_path2 . $img_name2;
            $col_name2 = '1920x800';
            $this->cwCropSizes($img_path, $path2, 1920, 800);

        } elseif( $width == '2400' && $height == '750' ) {

            $img_path = public_path('/storage/uploads/2400X750/') . $width.'x'.$height.'-'.$id.'.png';
            file_put_contents($img_path, $image_base64);
            $col_name = '2400x750';
            $step = '3';

            $img_path2 = public_path('/storage/uploads/1920X600/');
            $img_name2 = '1920x600-'.$id.'.png';
            $path2 = $img_path2 . $img_name2;
            $col_name2 = '1920x600';
            $this->cwCropSizes($img_path, $path2, 1920, 600);

        } elseif( $width == '2400' && $height == '500' ) {

            $img_path = public_path('/storage/uploads/2400X500/') . $width.'x'.$height.'-'.$id.'.png';
            file_put_contents($img_path, $image_base64);
            $col_name = '2400x500';
            $step = '4';

            $img_path2 = public_path('/storage/uploads/1920X400/');
            $img_name2 = '1920x400-'.$id.'.png';
            $path2 = $img_path2 . $img_name2;
            $col_name2 = '1920x400';
            $this->cwCropSizes($img_path, $path2, 1920, 400);

        } elseif( $width == '600' && $height == '600' ) {

            $img_path = public_path('/storage/uploads/600X600/') . $width.'x'.$height.'-'.$id.'.png';
            file_put_contents($img_path, $image_base64);
            $col_name = '600x600';
            $step = '5';

            $img_path2 = public_path('/storage/uploads/300X300/');
            $img_name2 = '300x300-'.$id.'.png';
            $path2 = $img_path2 . $img_name2;
            $col_name2 = '300x300';
            $this->cwCropSizes($img_path, $path2, 300, 300);

        } elseif( $width == '450' && $height == '600' ) {
            $img_path = public_path('/storage/uploads/450X600/') . $width.'x'.$height.'-'.$id.'.png';
            file_put_contents($img_path, $image_base64);
            $col_name = '450x600';
            $step = '6';
        }
        $imageName = $width.'x'.$height.'-'.$id.'.png';
        UploadImage::where('id', $id)->update(array($col_name => $imageName));
        return response()->json([
            'status' => true,
            'step' => $step,
        ]);
    }

    public function cwCropSizes($img_path, $path1, $orignal_width, $orignal_height) {
        $new_path = imagecreatefrompng($img_path);
        $width = ImageSx($new_path);          // Original picture width is stored
        $height = ImageSy($new_path);        // Original picture height is stored
        $orignal_height = ($orignal_width / $width) * $height; // Add this line to maintain aspect ratio
        $newimage = imagecreatetruecolor($orignal_width, $orignal_height);
        imageCopyResized($newimage, $new_path, 0, 0, 0, 0, $orignal_width, $orignal_height, $width, $height);
        imagepng($newimage, $path1);
        chmod("$path1", 0777);
    }

}