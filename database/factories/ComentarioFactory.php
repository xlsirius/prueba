<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\comentarios;
use Faker\Generator as Faker;

$factory->define(comentarios::class, function (Faker $faker) {
    return [
        'comentirio'=> $faker->sentence
    ];
});
