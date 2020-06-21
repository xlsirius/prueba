<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->integerIncrements('id_comentario');
            $table->string('comentirio');
            //DATOS DEL USUARIO QUE COMENTA EL SERVICIO
            $table->integer('id_servicio')->unsigned();
            $table->foreign('id_servicio')->references('id_servicio')->on('sercicios')
            ->onDelete('cascade');
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
        Schema::dropIfExists('comentarios');
    }
}
