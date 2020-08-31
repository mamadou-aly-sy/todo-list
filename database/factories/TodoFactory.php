<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "description" => $faker->text(),
        "id_user" => random_int(1, 50),
        "id_cat" => random_int(1, 5),
    ];
});
