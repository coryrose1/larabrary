<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pricing;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Pricing::class, function (Faker $faker) {
    return [
        'amount' => rand(0, rand($faker->numberBetween(0, 100000), $faker->numberBetween(0, 100000))),
        'cadence' => Arr::random(['once', 'monthly']),
        'course_id' => factory(\App\Course::class),
    ];
});
