<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class passing_cont extends Controller
{
    // public function withoutname()
    // {
    //     // echo "$name";
    //     echo " Hello From Controller's function :) ";
    // }
    public function send_to_view($param)
    {
        echo "$param";
        $data = ['ARNR', 'AK', 'SH', 'SAB'];
        // $data = 23;
        echo " Hello From Controller's function :) ";
        return view('pass_cont_then_view',[ 'name'=>$param ,'users'=> $data]);
    }
}
