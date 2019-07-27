<?php

use Faker\Generator as Faker;

$factory->define(App\Ingreso::class, function (Faker $faker) {
    return [
        'controlador' => $faker->jobTitle
    ];
});
