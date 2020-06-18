<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Benefit;
use Faker\Generator as Faker;

$factory->define(Benefit::class, function (Faker $faker) {
    return [
        'benefit' => $faker->sentence,
        'pricing_id' => factory(\App\Pricing::class),
    ];
});
