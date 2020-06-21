<?php

use Illuminate\Database\Seeder;
use App\sercicios;
use App\User;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::all();
        $user->each( function($user){

            factory(sercicios::class,10)->create([
                'id'=>$user->id,
                'name_user'=>$user->name
            ]);
        });


    }
}
