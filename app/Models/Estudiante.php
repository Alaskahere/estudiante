<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function clases(){
        return  $this->belongsToMany(Clase::class);
    }
}
