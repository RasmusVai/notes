<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(100),
        'body' => $faker->realText(100),
        'user_id' => 1,
        'color' => 2,
    ];
});
