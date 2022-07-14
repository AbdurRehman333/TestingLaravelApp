<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_user_cont extends Controller
{
    //
    function getData(Request $req)
    {
        echo "its controller";
        $data = $req->input();
        // print_r($data);
        $req->session()->flash('entered_name', $data['username']);
        return redirect('add_user');
    }
}
