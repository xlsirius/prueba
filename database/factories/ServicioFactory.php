<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\sercicios;
use Faker\Generator as Faker;

$factory->define(sercicios::class, function (Faker $faker) {
    return [
        'titulo'=> $faker->sentence,
        'descripcion'=> $faker->text,
        'valor'=> 2000,
        'id'=>1

    ];
});
