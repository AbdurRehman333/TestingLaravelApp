<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\deleting_from_dB_model;

class deleting_from_dB_cont extends Controller
{
    //
    function show_data()
    {
        $data = deleting_from_dB_model::all();
        return view('deleting_from_dB', ['data' => $data]);
    }
    function Del_data($sid)
    {
        echo $sid;
        $data = deleting_from_dB_model::find($sid);
        // echo $data;
        $data->delete();
        return redirect('deleting_from_dB');
    }
    function Editing($sid)
    {
        $data = deleting_from_dB_model::find($sid);
        return view('show_editing_form', [ 'data' => $data]);
    }
    function update_confirm(Request $req)
    {
        // return $req->input();
        // $model = new deleting_from_dB_model;
        $model = deleting_from_dB_model::find($req->sid); // it is causing trouble
        $model->sname = $req->username;
        $model->sclass = $req->class;
        $model->sphone = $req->phone;
        $model->save();
        return redirect('deleting_from_dB');
    }
}
