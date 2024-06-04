<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuitions extends Model
{
    protected $table='tuition';
    protected $fulleable=['id','students_data','record','date'];




public function Student ()
{
  return $this->hasone(Student::class);
}

public function Carrer()
{
    return $this->hasone(Carrer::class);
}
}
