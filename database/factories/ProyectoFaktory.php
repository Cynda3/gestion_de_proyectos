<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName,
        'titulo' => $faker->title,
        'fechainicio' => $faker->date,
        'fechafin' => $faker->date,
        'horasestimadas' => $faker->numberBetween($min = 0, $max = 1000),
    ];
});
