<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    //relacion de muchos a muchos
    public function plataformas()
    {
        //segundo parametro nombre de tabla intermedia.
        //tercer parametro, nombre de llave foranea, modelo en el que estoy.
        //cuarto parametro, nombre de segunda llave foranea, modelo que referencia.
        //si respeté la convención de nombres puedo omitir el segundo, tercer y cuarto parametro.
        return $this->belongsToMany('App\Plataforma');
    }
}
