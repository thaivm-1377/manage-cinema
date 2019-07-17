<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Ticket::class, function (Faker $faker) {
    return [
        'price' => $faker->randomElement(['75000','150000','250000']),
        'seat_id' => $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13']),
        'schedule_id' => $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13']),
        'booking_id' => $faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13']),
    ];
});
