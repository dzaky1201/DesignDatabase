<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('task_categories')->insert([
            [
                "task_id" => 1,
                "category_id" => 1,
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],
            [
                "task_id" => 2,
                "category_id" => 3,
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
