<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $table='students';
    protected $fulleable=['id','name','last_name','gender','identifications_card','telephone','email','address'];

    public function Tuition()



{
    return $this->hasone(Tuition::class);
}

}


