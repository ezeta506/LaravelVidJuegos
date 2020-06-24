<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *puedo insertar como array porque en el modelo, en el metodo fillable tengo los campos para llenarlo por medio de array
     * @return void
     */
    public function run()
    {
        //llenado como array
        //bcrypt('123456') es para encriptar contrasenas
        $objetoUser=\App\User::create(['name'=>'usuario1',
        'email'=>'usuario1@gmail.com',
        'password'=>bcrypt('123456'),
        'rol_id'=>1 ]);

        $objetoUser = \App\User::create([
            'name' => 'usuario2',
            'email' => 'usuario2@gmail.com',
            'password' => bcrypt('123456'),
            'rol_id' => 1
        ]);
    }
}
