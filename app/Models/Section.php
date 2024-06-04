<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table='sections';
    protected $fulleable=['id','name','location','area',];

    public function teachers( )
{
    return $this->hasmany(Teacher::class);
}
}
