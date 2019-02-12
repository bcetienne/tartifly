<?php

use Faker\Generator as Faker;

$factory->define(App\Travel::class, function (Faker $faker) {
    return [
        'label' => $faker->word,
        'country' => $faker->country,
        'city' => $faker->city,
        'date_begin' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'date_end' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'cost' => $faker->randomNumber(2),
        'photo' => $faker->word,
        'description' => $faker->word,
        'dispo' => $faker->boolean,
    ];
});
