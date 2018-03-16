<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report', function (Blueprint $table) {
            $table->increments('id');
            $table->date('create_at');
            $table->string('ticket_type');
            $table->string('denomination');
            $table->integer('quantity');
            $table->string('complex');
            $table->integer('contragent')->unsigned();
            $table->string('first_ticket_num');
            $table->string('last_ticket_num');

            $table->foreign('contragent')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report');
    }
}
