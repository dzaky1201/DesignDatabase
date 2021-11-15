<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->insert([
            [
                "color_id" => 1,
                "user_id" => 1,
                "name" => "IDN",
                "password" => "123",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],
            [
                "color_id" => 1,
                "user_id" => 1,
                "name" => "Yaumi",
                "password" => "123",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],
            [
                "color_id" => 2,
                "user_id" => 2,
                "name" => "Apple Academy",
                "password" => "123",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],
            [
                "color_id" => 2,
                "user_id" => 2,
                "name" => "Microsoft",
                "password" => "123",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
