<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *cualquier cambio en la carpeta de seeds tengo que ejecutar un comando en la terminal
     *para actualizar las dependencias, el comando es: composer dump-autoload, sino se have puede haber problema al ejecutar los seeders
     * @return void
     */
    public function run()
    {
        $this->call(RolTableSeeder::class);
         $this->call(UserSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(VideojuegoSeeder::class);
        $this->call(LikeSeeder::class);
    }
}
