<?php

use App\Videojuego;
use Illuminate\Database\Seeder;

class VideojuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $videojuego = new \App\Videojuego();
        $videojuego->nombre = 'Super Mario';
        $videojuego->descripcion = 'Es un video juego de plataformas de mundo abierto';
        $videojuego->fechaEstrenoInicial = '2017-10-21';
        //$videojuego->publicar = 'true';
        $videojuego->user_id = 1;
        $videojuego->save();
        //agregar plataformas
        //se guarda en una tabla intermedia o pivot
        $videojuego->plataformas()->attach([1, 2, 3]);

        $videojuego = new \App\Videojuego();
        $videojuego->nombre = 'Crash Car';
        $videojuego->descripcion = 'Es un video juego divertido';
        $videojuego->fechaEstrenoInicial = '1996-09-09';
        // $videojuego->publicar = 'true';
        $videojuego->user_id = 2;
        $videojuego->save();
        //agregar plataformas
        //se guarda en una tabla intermedia o pivot
        $videojuego->plataformas()->attach([1, 2, 3]);

        $videojuego = new \App\Videojuego();
        $videojuego->nombre = 'The Legend of Zelda';
        $videojuego->descripcion = 'Es un video juego de aventuras';
        $videojuego->fechaEstrenoInicial = '2017-03-03';
        //$videojuego->publicar = 'true';
        $videojuego->user_id = 1;
        $videojuego->save();
        //agregar plataformas
        //se guarda en una tabla intermedia o pivot
        $videojuego->plataformas()->attach([5, 2]);
    }
}
