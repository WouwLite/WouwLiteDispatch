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
            $table->increments('id');
            $table->char('dispatchClass1', 20);
            $table->char('dispatchClass2', 20);
            $table->char('dispatchClass3', 20);
            $table->integer('primeKarID', 15);
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
