<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $like = new \App\Like();
        $like->videojuego_id = 1;
        $like->save();

        $like = new \App\Like();
        $like->videojuego_id = 2;
        $like->save();

        $like = new \App\Like();
        $like->videojuego_id = 3;
        $like->save();

        $like = new \App\Like();
        $like->videojuego_id = 3;
        $like->save();

        $like = new \App\Like();
        $like->videojuego_id = 2;
        $like->save();
    }
}
