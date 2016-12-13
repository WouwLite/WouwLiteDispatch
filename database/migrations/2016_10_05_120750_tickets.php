<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            // Assign an unique ID
            $table->increments('id');
            
            // Add special items to correctly identify the ticket
            $table->integer('weeklyID', 5); // For example: 1640 (year + week)
            $table->integer('dailyID', 9); // For example: 05102016 (day + month + year)
            $table->string('location', 100);
            $table->string('contact-name', 100); // Contact name
            $table->string('contact-phone', 100); // Contact phone number
            $table->string('description', 100); // Open area for client to fill in global data
            $table->integer('type', 100); // Assign type; Org, Security, Medical, Fire, other
            $table->date('create_date');
            $table->time('create_time');
            
            // Edit the ticket
            $table->integer('agent-id');
            $table->string('agent-response', 255);
            $table->date('updated_at');
            
            // Close the ticket
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
        Schema::dropIfExists('tickets');
    }
}
