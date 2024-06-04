<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrer extends Model
{
    protected $table='carrers';
    protected $fulleable=['id','name','faculty'];

    Public function tuition()
    {
       return $this->hasone(Tuition::class);
    }
}
