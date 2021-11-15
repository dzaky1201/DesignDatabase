<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                "list_id" => 1,
                "user_id" => 1,
                "name" => "Ini adalah catatan saya kegiatan di idn",
                "reminder_datetime" => Date::now()->addDays(rand(0, 365)),
                "due_date" => Date::now()->addDays(rand(0, 365)),
                "attachment_url" => "https://google.com",
                "note" => "Besok selesai",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ],

            [
                "list_id" => 2,
                "user_id" => 1,
                "name" => "Ini adalah catatan saya kegiatan di Yaumi",
                "reminder_datetime" => Date::now()->addDays(rand(0, 365)),
                "due_date" => Date::now()->addDays(rand(0, 365)),
                "attachment_url" => "https://google.com",
                "note" => "Besok selesai",
                "created_at" => Date::now()->format('Y-m-d H:i:s'),
                "updated_at" => Date::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
