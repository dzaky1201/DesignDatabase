<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->dateTime('reminder_datetime');
            $table->date('due_date');
            $table->text('attachment_url');
            $table->text('note');
            $table->boolean('is_complete')->default(false);
            $table->boolean('is_my_day')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
