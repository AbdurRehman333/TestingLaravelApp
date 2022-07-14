<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=0; $i < 5; $i++)
        {
            DB::table('employee')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
            ]);
        }
    }
}
