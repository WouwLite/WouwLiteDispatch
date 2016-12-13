<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lmc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lmc', function (Blueprint $table) {
            // DATA FROM LMC50_PrimKar_20151222.numbers
            $table->increments('id'); // Unique ID value
            $table->char('incidentType1', 25); // MeldingClass Nivo 1
            $table->char('incidentType2', 25); // MeldingClass Nivo 2
            $table->char('incidentType3', 25); // MeldingClass Nivo 3
            $table->string('type', 25); // Naam_karakteristiek
            $table->integer('primeKarID', 15); // Primary ID
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
        Schema::dropIfExists('lmc');
    }
}
