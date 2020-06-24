<?php

use Illuminate\Database\Seeder;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new \App\Plataforma();
        $rol->nombre = "3DS";
        $rol->save();

        $rol = new \App\Plataforma();
        $rol->nombre = "Nintendo";
        $rol->save();

        $rol = new \App\Plataforma();
        $rol->nombre = "Play Station 4";
        $rol->save();

        $rol = new \App\Plataforma();
        $rol->nombre = "PlayStation Vita";
        $rol->save();

        $rol = new \App\Plataforma();
        $rol->nombre = "Wii U";
        $rol->save();

        $rol = new \App\Plataforma();
        $rol->nombre = "Xbox One";
        $rol->save();
    }
}
