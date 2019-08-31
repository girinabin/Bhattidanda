<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('booking_id');
            $table->string('emailto');
            $table->string('subject');
            $table->longtext('message');
            $table->integer('active');
            $table->integer('bookingstatus');
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
        Schema::dropIfExists('booking_replies');
    }
}
