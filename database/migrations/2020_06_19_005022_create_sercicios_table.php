<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sercicios', function (Blueprint $table) {
            $table->integerIncrements('id_servicio');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('valor');
            //DATOS DEL USUARIO QUE PUBLICA EL SERVICIO
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            //-------------------------------------------------------------------------

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sercicios');
    }
}
