<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flightmodels', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->integer('fno');
            $table->string('departure');
            $table->string('arrival');
            $table->date('depdate');
            $table->date('arridate');
            $table->time('deptime');
            $table->time('arritime');
            $table->integer('fcharge');
            $table->integer('echarge');
            $table->integer('bcharge');
            $table->integer('fseat');
            $table->integer('eseat');
            $table->integer('bseat');
        
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
        Schema::dropIfExists('flightmodels');
    }
}
