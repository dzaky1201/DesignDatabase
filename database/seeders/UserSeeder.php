<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name" => "Dzaky Haidar",
                "email" => "dzakyhdr@gmail.com",
                "password" => "123",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],
            [
                "name" => "Mufti",
                "email" => "mufti@gmail.com",
                "password" => "123",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
