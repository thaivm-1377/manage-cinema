<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Schedule::class, function (Faker $faker) {
    return [
        'date' => $faker->date($max = '2019-07-30'),
        'time' => $faker->time($format='H:0', $max='24:00'),
        'room_id' => $faker->randomElement(['1','2','3','4']),
        'film_id' => $faker->randomElement(['1','2','3','4','5','6','7']),
    ];
});
