<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class join_DB extends Controller
{
    //
    public function apply_join()
    {


        // $company = DB::table('company')
        //     ->join('employee', 'company.emp_id', '=', 'employee.id')
        //     ->get();
        // return $company;

        $company = DB::table('employee')
        ->join('company', 'employee.id', '=', 'company.emp_id')
        ->select('employee.*', 'company.c_name')
        ->where('employee.name','peter')
        ->get();
        return $company;

    }
}
