<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pricing;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Pricing::class, function (Faker $faker) {
    $amount = rand(0, rand($faker->numberBetween(0, 100000), $faker->numberBetween(0, 100000)));
    return [
        'amount' => $amount,
        'cadence' => Arr::random(['once', 'monthly']),
        'course_id' => factory(\App\Course::class),
        'on_sale' => rand(0, 1),
        'on_sale_amount' => $amount * .8,
        'on_sale_until' => rand(null, rand(Carbon::now()->subWeek(), Carbon::now()->addWeek())),
    ];
});
