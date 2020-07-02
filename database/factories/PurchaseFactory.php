<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'beverage_id'=>$faker->randomDigit,
        'price'=>$faker->numberBetween(100,200)
    ];
});
