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
            $table->string('incident');
            $table->string('system_affected')->nullable();
            $table->string('affected_routine')->nullable();
            $table->string('entity')->nullable();
            $table->string('error_log')->nullable();
            $table->string('external_contact')->nullable();
            $table->string('responsible_team')->nullable();
            $table->string('error_type')->nullable();
            $table->string('impact')->nullable();
            $table->string('incident_opening')->nullable();
            $table->string('service_start')->nullable();
            $table->text('description')->nullable();
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
