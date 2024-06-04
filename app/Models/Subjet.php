<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjet extends Model
{
    protected $table='Subjets';
    protected $fulleable=['id','name','grades','durations','units'];
    
}
