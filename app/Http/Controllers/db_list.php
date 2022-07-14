<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_list_model;

class db_list extends Controller
{
    //
    public function index()
    {
        $data = db_list_model::paginate(1);
        // $data = db_list_model::paginat
        return view('db_list', [ 'data' => $data ]);
        // return view('pass_cont_then_view',[ 'name'=>$param ,'users'=> $data]);
    }
}
