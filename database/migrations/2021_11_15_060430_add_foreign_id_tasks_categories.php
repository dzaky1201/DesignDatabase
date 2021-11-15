<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignIdTasksCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_categories', function (Blueprint $table) {
            $table->foreignId('task_id')->references('id')->on('tasks');
            $table->foreignId('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_categories', function (Blueprint $table) {
            $table->dropForeign('task_id');
            $table->dropForeign('category_id');
        });
    }
}
