<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bio' => $faker->paragraph,
        'avatar' => 'https://picsum.photos/seed/'. $faker->word . '/200',
        'website' => $faker->url,
        'twitter' => $faker->word,
        'github' => $faker->word,
    ];
});
