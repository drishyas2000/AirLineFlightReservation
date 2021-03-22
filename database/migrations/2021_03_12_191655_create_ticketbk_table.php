<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketbkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketbk', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->integer('age');
            $table->string('class');
            $table->string('fname');
            $table->integer('fno');
            $table->string('gender');
            $table->date('depdate');           
            $table->integer('amount');
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
        Schema::dropIfExists('ticketbk');
    }
}
