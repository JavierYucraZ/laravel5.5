<?php

use Faker\Generator as Faker;
use \App\Ingreso;

$factory->define(Ingreso::class, function (Faker $faker) {
    return [
        'controlador' => $faker->jobTitle
    ];
});
