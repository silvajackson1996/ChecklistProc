<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_lists', function (Blueprint $table) {
            $table->id();
            $table->time('hourly');
            $table->enum('weekday', ['MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY', 'ALL']);
            $table->string('activity');
            $table->string('department')->nullable();
            $table->string('entity')->nullable();
            $table->string('task')->nullable();
            $table->integer('user_id');
            $table->enum('status', ['PENDING', 'EXECUTION', 'FINISHED']);
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
        Schema::dropIfExists('check_lists');
    }
}
