<?php

namespace Database\Seeders;

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
        $this->call([
            CategorySeeder::class,
            ColorSeeder::class,
            ListSeeder::class,
            SubtaskSeeder::class,
            TaskCategorySeeder::class,
            TaskSeeder::class,
            UserSeeder::class
        ]);
    }
}
