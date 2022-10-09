<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UploadImage;

class ImportImagesController extends Controller {


    public function index() {
        return view('import-images');
    }

    public function importimages() {
        $file = glob(public_path('/storage/uploads/import-images/*{png,jpg,jpeg,gif}'), GLOB_BRACE );
        $total_images = count($file);
        if( isset($_GET['importimgs']) ) {
            $import_images = $_GET['importimgs'];
            $counter = $import_images + 10;
            if( $import_images < $total_images ) {
                for( $i = $import_images; $i < $counter; $i++ ) {
                    $UploadImage = UploadImage::latest('id')->first();
                    $count_image = $UploadImage->id;
                    $default_filename = basename($file[$i]);
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
                    $orignal_img = $orignal_img_name . '.' . pathinfo($file[$i], PATHINFO_EXTENSION);
                    $path = public_path('/storage/uploads/') . $orignal_img;
                    $rename = rename(public_path('/storage/uploads/import-images/'.$default_filename), $path);
                    if( $rename == true ) {
    
                        $tumb_img = $tumb_img_name . '.' . pathinfo($file[$i], PATHINFO_EXTENSION);
                        $tumb_path = public_path('/storage/uploads/tumb/') . $tumb_img;
    
                        $thumb_width = 100;
                        $thumb_height = 100;
        
                        if( pathinfo($file[$i], PATHINFO_EXTENSION) == 'gif' ) {
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
        
                        if( pathinfo($file[$i], PATHINFO_EXTENSION) == 'jpeg' || pathinfo($file[$i], PATHINFO_EXTENSION) == 'jpg' ) {
                            $img_path = imagecreatefromjpeg($path);
                            $width = ImageSx($img_path);          // Original picture width is stored
                            $height = ImageSy($img_path);        // Original picture height is stored
                            $thumb_height = ($thumb_width / $width) * $height; // Add this line to maintain aspect ratio
                            $newimage = imagecreatetruecolor($thumb_width, $thumb_height);
                            imageCopyResized($newimage, $img_path, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
                            imagejpeg($newimage, $tumb_path);
                            chmod("$tumb_path", 0777);
                        }
        
                        if( pathinfo($file[$i], PATHINFO_EXTENSION) == 'png' ) {
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
                $url = url('import-images?importimgs=' . $counter);
                header("Refresh:3 url=".$url);
                exit();
            }
        } else {
            return view('import-images');
        }

    }

}