<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deleting_from_dB_model extends Model
{
    use HasFactory;
    public $table = "students";
    // when you run find() in controller it assumes that your primary key is going to be
    // `id`. If your table's primary key is not `id` then you have to use this statement
    // to mention its name.
    protected $primaryKey = 'sid';
    //While updating you must add timestamps=false
    public $timestamps=false;
}
