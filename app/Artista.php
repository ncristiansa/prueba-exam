<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artista";
    protected $fillable = ["Nombre"=>"required", "Apellido"=>"required", "Edad"=>"required", "Sexo"=>"required", "created_at", "updated_at"];
}
