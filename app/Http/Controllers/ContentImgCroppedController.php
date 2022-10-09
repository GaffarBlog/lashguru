<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UploadImage;

class ContentImgCroppedController extends Controller 
{

    public function index() {
        return view('content-img-cropped');
    }

    public function view() {
        $UploadImage = UploadImage::paginate(10);
        return view('content-img-cropped', ['UploadImage' => $UploadImage]);
    }

}