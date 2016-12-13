<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatrolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patrol', function (Blueprint $table) {
            $table->increments('id'); // Unique ID - could be remove in the future
            $table->string('patrol-id', 50); // Patrol ID, for example: 'E10' or 'Team 6'
            $table->string('patrol', 50); // Patrol name
            $table->integer('station', 50); // NULL = patrol, number = fixed to a station
            $table->string('radio', 50); // Which radio ID
            $table->integer('online', 9); // For example: 05102016 (day + month + year)
            $table->timestamps(); // Default timestamps for Laravel processing and migrations
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patrol', function (Blueprint $table) {
            //
        });
    }
}
