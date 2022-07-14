<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class file_upload_cont extends Controller
{
    //
    public function getData(Request $req)
    {
        // return $req->file('quote')->store('quotes');
        $path = $req->file('quote')->store('docs');
        $req->session()->flash('file_path', $path);
        return redirect('file_upload');
        // return $path;
        // storage/app/docs/IMAGE_HERE
    }
}
