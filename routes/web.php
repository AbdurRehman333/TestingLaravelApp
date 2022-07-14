<?php

use App\Http\Controllers\passing_cont;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\for_dB;
use App\Http\Controllers\api_http_client;
use App\Http\Controllers\add_user_cont;
use App\Http\Controllers\database_class;
use App\Http\Controllers\file_upload_cont;
use App\Http\Controllers\db_list;
use App\Http\Controllers\deleting_from_dB_cont;
use App\Http\Controllers\save_data_in_dB_cont;
use App\Models\deleting_from_dB_model;
use App\Http\Controllers\join_DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| MY LEARNING SOURCE : https://www.youtube.com/playlist?list=PL8p2I9GklV46dciS4GDzBFHBi0JVIbnzT
|==============================================================================
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 1. Without passing param to view
// Route::get('/hello', function () {
//     return view('hello');
// });
// 1. passing param to view
Route::get('/para/{name}', function ($name) {
    $data = ['Hello', 'World'];
    return view('param', ['name' => $name, 'users' => $data]);   //dynamic
    // return view('param', ['name' => 'Victoria']); //static
});

// 2. Without Passing param to controller
Route::get('/user', [user::class, 'withoutname']);
// Passing param to controller
Route::get('/user/{name}', [user::class, 'withname']);

// 3. Trying to pass params to controller and then controller 
// calls the view and passes arguements.
// Route::get('/pass_cont_then_view/{name}',[user::class,'withname']);  

Route::get('/pass_cont_then_view/{param}', [passing_cont::class, 'send_to_view']);

// 4. Playing with components
Route::get('about', function () {
    return view('about');
});


//-------Working on forms-----------------------//
// Route::view('login', 'login');
Route::post('login_form_submitted', [login_controller::class, 'getData']);
//-----------For Global Middleware-------------//
Route::get('no_access', function () {
    return view('no_access');
});
//-------------For Group Middleware--------------//
Route::group(['middleware' => ['My_protected_middleware']], function () {
    Route::get('about2', function ()  // age restricted.
    {
        return view('about2');
    });
});
//-------------For Routed Middleware--------------//
// Route::view('login', 'login')->middleware('My_protected_middleware');
// Route::get('login', function()
// {
//     return view('login');
// }) -> middleware('My_protected_middleware');
// ------------------For_dB------------------------//
Route::get('/hello', [for_dB::class,'index']);
Route::get('/hello/{key:cname}', [for_dB::class,'index_id']); // If i want to search by cname
// Route::get('/hello/{key}', [for_dB::class,'index_id']);
//-------------------Fetching API data-------------//
Route::get('/api', [api_http_client::class,'getData']);
//-------------------LOGIN-------------------------//
Route::post('login_form_submitted', [login_controller::class, 'getData']);

// Route::view('profile','profile');

Route::get('profile',function()
{
    if(session()->has('profile_username'))
    {
        return view('profile');
    }
    return redirect('login');
});

Route::get('logout',function()
{
    if(session()->has('profile_username'))
    {
        session()->pull('profile_username');
    }
    return view('login');
});

Route::get('login', function()
{
    if(session()->has('profile_username'))
    {
        return view('profile');
    }
    return view('login');
});
//-----------------Flash Session-----------------//
Route::view('add_user','add_user');
// Route::post('adding_user',[add_user_cont::class, 'getData']);
Route::post('adding_user', [add_user_cont::class, 'getData']);
//------------------File Upload------------------//
Route::view('file_upload','file_upload');
Route::post('file_uploaded', [file_upload_cont::class, 'getData']);
//-------------------Showing dB records----------------------//
// Route::view('db_list','db_list');
Route::get('db_list', [db_list::class, 'index']);
//---------------------Saving data into dB-------------------//
Route::view('save_data_in_dB','save_data_in_dB');
Route::post('save_data_in_dB',[save_data_in_dB_cont::class, 'saveData']);
//---------------------Deleting From dB list-----------------//
Route::get('deleting_from_dB',[deleting_from_dB_cont::class, 'show_data']);
Route::get('delete/{sid}',[deleting_from_dB_cont::class, 'Del_data']);
//--------------------Updating from dB list0------------------//
Route::get('edit/{sid}',[deleting_from_dB_cont::class, 'Editing']);
Route::view('show_editing_form','show_editing_form');
Route::post('/edit', [ deleting_from_dB_cont::class , 'update_confirm']);
// Route::put('/edit', [ deleting_from_dB_cont::class , 'update_confirm']);
//---------------------Using DB CLASS--------------------------//
// I wont provide any route for this. Just see it in db_class_cont
route::get('db_class',[database_class::class, 'DB_queries']);
//------------------------JOINS----------------------//
route::get('joins', [join_DB::class, 'apply_join']);
// route::get('joins', [for_dB::class,'apply_join']);
//-------------------Other concepts----------------//
    // 1- Accessors
    // 2- Mutators
    // 3- Stub customization
    // 4- Relations ( one to one / one to many ...)
    // 5- Fluent String
    // 6- Route model binding
    // 7- Making own console commands
    // 8- Multiple Database Connection

//-----------------------Testing----------------------//
