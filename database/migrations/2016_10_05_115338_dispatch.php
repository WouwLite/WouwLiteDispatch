<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dispatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch', function (Blueprint $table) {
            $table->increments('id'); // Unique iD
            $table->integer('weeklyID', 5); // For example: 1640 (year + week)
            $table->integer('dailyID', 9); // For example: 05102016 (day + month + year)
            $table->date('create_date');
            $table->time('create_time');
            
            // DELETE MEEEEEEE - changed to dispatchTickets
            
            
            // Clode the ticket
            $table->integer('closed', 2);
            $table->date('closed_at');
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
        Schema::dropIfExists('dispatch');
    }
}
