<?php

use Faker\Generator as Faker;

$factory->define(App\Profesion::class, function (Faker $faker) {
    return [
        'nombre_profesion'  => $faker->catchPhrase
    ];
});
