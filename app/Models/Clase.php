<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $guarded =[];


    public function estudiantes(){
        return  $this->belongsToMany(Estudiante::class);
    }
}
