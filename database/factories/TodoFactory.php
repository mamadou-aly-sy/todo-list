<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        "name" => $faker->text(20),
        "description" => $faker->text(255),
        "id_user" => random_int(1, 50),
        "id_cat" => random_int(1, 5),
    ];
});
