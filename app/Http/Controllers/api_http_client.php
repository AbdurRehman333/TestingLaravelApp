<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class api_http_client extends Controller
{
    //
    public function getData()
    {
        echo "CONTROLLER API DATA";
        $collection =  http::get("https://reqres.in/api/users?page=1");

        return view('api_data', ['collection'=>$collection['data']] );
    }
}
