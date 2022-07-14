<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    public function withoutname()
    {
        // echo "$name";
        // echo " Hello From Controller's function :) ";
        return view('a');
    }
    public function withname($name)
    {
        echo "$name";
        echo " Hello From Controller's function :) ";
    }
}
