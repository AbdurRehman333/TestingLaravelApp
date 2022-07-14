<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class save_data_in_dB_model extends Model
{
    use HasFactory;
    public $table = "students";
    public $timestamps=false;
}
