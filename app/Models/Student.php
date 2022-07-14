<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $table = "class"; //Which table you want to fetch from dB
    protected $primaryKey = 'cid'; // bcz primary key is not id but cid
}
