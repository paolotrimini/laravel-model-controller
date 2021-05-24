<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker -> firstname,
        'original_title' => $faker -> lastname,
        'nationality' => $faker -> country,
        'date' => $faker -> date,
    ];
});
