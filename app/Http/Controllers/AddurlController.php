<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Url;


class AddurlController extends Controller
{
    //addurl controller
    public function index()
    {
        return view('img-add-url');
    }

    public function store(request $request)
    {     


        $addurls = $request->validate([
            'url' => 'required|unique:addurls',
        ]);

        
        // $url = Url::where('url', '=', $request->cwaddurl)->first();
        // $request->validate([
        //     'url' => 'required|unique:addurls'
        // ]);
        $addurls = Str::of($request->url)->explode(',');
        foreach ($addurls as $value) {
            
            Url::create([
                'url' => $value,

            ]);
        }
        return redirect('img-add-url');
    }

    //  After insert query view insert data there downloadimg
    public function view()
    {
        $url = url::all();
        return view('img-download', ['url' => $url]);
    }

    public function update($url_id)
    {

    //     Flight::where('active', 1)
    //   ->where('destination', 'San Diego')
    //   ->update(['delayed' => 1]);
        $url = Url:: where('url_id', $url_id)->update([
            'done_id' => 'yes',
        ]);
        return redirect('/img-download');
    }
}
