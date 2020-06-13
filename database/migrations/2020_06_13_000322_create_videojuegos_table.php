<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->date('fechaEstrenoInicial');
            $table->boolean('publicar')->default(false);
            //llaves foraneas
            //asociar con un usuario
            $table->unsignedInteger('user_id');
            $table->timestamps();
            //establecer llave foranea
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     //borrar primero llave foranea y despues la tabla
    public function down()
    {
        //nombre de la tabla primero
        Schema::table('videojuegos', function (Blueprint $table) {
            //nombre de la llaveforanea
            //nomenclatura nombreDeLaTabla_nombreDelCampo_foreign
            $table->dropForeign('videojuegos_user_id_foreign');
            //opcional, para borrar columna
            $table->dropColumn('user_id');
        });


        Schema::dropIfExists('videojuegos');
    }
}
