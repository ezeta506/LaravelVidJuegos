<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlataformaVideojuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plataforma_videojuego', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('videojuego_id');
            $table->unsignedInteger('plataforma_id');
            $table->timestamps();
            $table->foreign('videojuego_id')->references('id')->on('videojuegos');
            $table->foreign('plataforma_id')->references('id')->on('plataformas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('plataforma_videojuego', function (Blueprint $table) {

            $table->dropForeign('plataforma_videojuego_videojuego_id_foreign');
            $table->dropForeign('plataforma_videojuego_plataforma_id_foreign');
        });

        Schema::dropIfExists('plataforma_videojuego');
    }
}
