<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_controller extends Controller
{
    function getData(Request $req)
    {
        $req->validate([
            'username' => 'required | max:5',
            'password' => 'required | min:2'

        ]);
        $data = $req->input();
        $req->session()->put('profile_username', $data['username']);
        // echo session('profile_username');
        return redirect('profile');
    }
}