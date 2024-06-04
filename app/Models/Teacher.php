<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teachers';
    protected $fulleable=['id','name','last_name','gender','civil_status','identification_card','address','email','telephone'];
}
