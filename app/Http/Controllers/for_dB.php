<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class for_dB extends Controller
{
    //
    // function index() // with db class
    // {
    //     return DB::select("select * from students");
    // }
    function index() // with model
    {
        // return DB::select("select * from students");
        echo "Using Model \n";
        return Student::all();
    }

    function index_id(Student $key)
    {
        // echo $key;       //class name is cid; so see model.. 
        return Student::find($key);
    }

    // for join
    // public function apply_join()
    // {
    //     // $users = DB::table('users')
    //     //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
    //     //     ->join('orders', 'users.id', '=', 'orders.user_id')
    //     //     ->select('users.*', 'contacts.phone', 'orders.price')
    //     //     ->get();
    //     $company = DB::table('company')
    //         ->join('employee', 'company.emp_id', '=', 'employee.id')
    //         ->get();
    //     return $company;
    // }
}
