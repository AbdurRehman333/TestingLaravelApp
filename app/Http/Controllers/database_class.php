<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class database_class extends Controller
{
    //
    function DB_queries()
    {

        //AGREGATE FUNCTIONS
        // count, max, min, avg, and sum
        // Search them on : https://laravel.com/docs/8.x/queries#aggregates
        //--------------------------------------------------------------------------

        // echo "code";
        // $id_given = 10;
        // 1. FINDING
        // return DB::table('students')->get();
        // return DB::table('students') ->where('sid',10) ->get();
        // return DB::table('students')-> where('sid', $id_given) -> get();

        // for this id must be `id` not `sid` like in my case. // LIMITATION
        // return (array)DB::table('students')->find(10); //ALTERNATIVE: get()


        // 2. INSERTING
        // return DB::table('students')
        // ->insert(
        //     [
        //         'sname' => 'From DB query',
        //         'sclass' => 313,
        //         'sphone' => 23232
        //     ]
        //     );

        // 3. UPDATE
        // return DB::table('students')
        // -> where('sid',28)
        // ->update(
        //     [
        //         'sname' => 'Updated from DB class..',
        //         'sclass' => 313,
        //         'sphone' => 23232
        //     ]
        //     );

        // 4. DELETE
        return DB::table('students')
        -> where('sid', 27)
        -> delete();

       }
}
