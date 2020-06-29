<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //metodos de las relaciones
    //usuario tiene relación con rols y videojuegos
    //un usuario pertenese a un rol
    //cuidado con el nombre del método de la relación
    public function rol()
    {
        //parametros
        //App nombre de la carpeta donde estoy
        //nombre del modelo con el que establezco la relacion, en este caso rol
        //establecer llave foranea si tiene otro nombre diferente al de la convencion de nombre
        //establecer llave primaria si tiene otro nombre diferente al de la convencion de nombre
        return $this->belongsTo('App\Rol');
    }

    public function videojuegos()
    {
        return $this->hasMany('App\Videojuego');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
