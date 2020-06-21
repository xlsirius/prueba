<?php

use Illuminate\Database\Seeder;
use App\sercicios;
use App\comentarios;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios= sercicios::all();
        $servicios->each( function($servicios){

            factory(comentarios::class,10)->create([
                'id_servicio'=>$servicios->id_servicio
            ]);
        });
    }
}
