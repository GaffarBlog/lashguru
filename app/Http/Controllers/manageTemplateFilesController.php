<?php

namespace App\Http\Controllers;

use App\Models\CatManageTemplates;
use App\Models\ManageTemplateFile;
use Illuminate\Http\Request;

class manageTemplateFilesController extends Controller
{
    public function index()
    {
        $categories = CatManageTemplates::all();
        $templates = ManageTemplateFile::paginate(10);
        return view('manage-template-files', ['categories' => $categories, 'templates' => $templates]);
    }
    public function store(Request $request){
        $request->validate([
            'category' => 'required',
            'uploadJson' => 'required|mimes:json',
            'screenshot' => "required|mimes:png,jpg, jpeg"
        ]);


        $templateFile = new ManageTemplateFile();
        $templateFile->category_id = $request->category;
        $templateFile->title = "Service Widget";
        if ($request->hasFile('uploadJson')) {
            $jsonFile = $request->file('uploadJson');
            $ext = $jsonFile->extension();
            $jsonFileName = 'JsonFile' . time() . '.' . $ext;
            $jsonFile->move('assets/json/', $jsonFileName);
            $templateFile->json = $jsonFileName;
        }
        if ($request->hasFile('screenshot')) {
            $image = $request->file('screenshot');
            $ext = $request->file('screenshot')->extension();
            $image_name = 'screenshot' . time() . '.' . $ext;
            $image->move('assets/images/', $image_name);
            $templateFile->screenshot = $image_name;
        }
        $templateFile->save();
        return back()->with('success', 'Template add successfully !');
    }
    public function delete(Request $request){
        $template =ManageTemplateFile::find($request->id);
        if($template->json){
        unlink(('assets/json/' . $template->json));
        }
        if($template->screenshot){
        unlink(('assets/images/' . $template->screenshot));
        }
            
        $template->delete();
        return back()->with('deleteMessage', 'Social Icon delete successfully!');
    }
}
