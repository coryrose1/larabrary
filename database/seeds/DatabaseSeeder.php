<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(\AuthorSeeder::class)
             ->call(\CategorySeeder::class)
             ->call(\CourseSeeder::class)
             ->call(\PricingSeeder::class)
             ->call(\BenefitSeeder::class);
    }
}
