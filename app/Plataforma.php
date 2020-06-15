<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plataforma extends Model
{
    public function videojuegos()
    {
        return $this->belongsToMany('App\Videojuego');
    }
}
