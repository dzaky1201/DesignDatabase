<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class SubtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subtasks')->insert([
            [
                "task_id" => 1,
                "name" => "subtasks idn",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],
            [
                "task_id" => 2,
                "name" => "subtasks yaumi",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
