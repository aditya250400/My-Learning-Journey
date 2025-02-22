<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(123);

        $this->call(CategorySeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(ArticleNewsSeeder::class);
    }
}
