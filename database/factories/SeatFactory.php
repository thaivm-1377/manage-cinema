<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Seat::class, function (Faker $faker) {
    return [
        'row'=>$faker->randomElement(['A','B','C','D']),
        'number'=>$faker->randomElement(['1','2','3','4','5','6']),
        'type'=>$faker->randomElement(['1','2']),
        'room_id'=>$faker->randomElement(['1','2','3','4']),
    ];
});
