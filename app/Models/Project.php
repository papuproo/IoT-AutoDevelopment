<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Lo que hace Eloquent, es convertir el nombre de este modelo de singluar a plural ademas de quitar la letra capital y ponerle una //minuscula, asi es como busca el nombre de la tabla

class Project extends Model
{
    //use HasFactory;
    protected $fillable = ['title', 'description'];
    //protected $fillable = ['title', 'url', 'description'];
    //protected $guard = [];
}

