<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Course::class, 5)->create();

        // Populate course categories and authors
        $categories = App\Category::all();
        $authors = App\Author::all();

        App\Course::all()->each(function ($course) use ($categories, $authors) {
            $course->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
            $course->authors()->attach(
                $authors->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
