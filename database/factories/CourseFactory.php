<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Course::class, function (Faker $faker) {
    $name = $faker->word;
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'image' => 'https://picsum.photos/seed/'. $faker->word . '/400/300',
        'summary' => $faker->sentence,
        'description' => $faker->paragraph,
        'website' => $faker->url,
        'published_at' => $faker->dateTime(),
    ];
});
