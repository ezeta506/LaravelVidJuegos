<?php

use Illuminate\Database\Seeder;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crear variable
        //indicar el modelo de referencia
        //crearlo como opjeto, es diferente a crearlo como array, tengo las dos opciones disponibles
        $rol = new \App\Rol();
        $rol->name = "administrador";
        $rol->descripcion = "administrador";
        $rol->save();

        $rol = new \App\Rol();
        $rol->name = "publicador";
        $rol->descripcion = "publicador";
        $rol->save();

        $rol = new \App\Rol();
        $rol->name = "cliente";
        $rol->descripcion = "cliente";
        $rol->save();
    }
}
