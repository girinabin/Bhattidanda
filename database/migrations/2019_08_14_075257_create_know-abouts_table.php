<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowabouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('tagline');
            $table->string('image');
            $table->string('altimage');
            $table->text('description');
            $table->string('pdf');
            $table->string('video');
            
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
        Schema::dropIfExists('know-abouts');
    }
}
