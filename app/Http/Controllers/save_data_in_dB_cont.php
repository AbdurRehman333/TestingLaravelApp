<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\save_data_in_dB_model;

class save_data_in_dB_cont extends Controller
{
    //
    public function saveData(Request $req)
    {
        $model = new save_data_in_dB_model;
        $model->sname = $req->username;
        $model->sclass = $req->class;
        $model->sphone = $req->phone;
        $model->save();
        // echo $model;
        return redirect('save_data_in_dB');
    }
}
