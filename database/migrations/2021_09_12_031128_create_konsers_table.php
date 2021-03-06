<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle'); 
            $table->dateTime('date');
            $table->integer('ticket_price');
            $table->string('venue'); 
            $table->string('venue_address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip');
            $table->text('additional_information');
            $table->dateTime('published_at')->nullable();
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
        Schema::dropIfExists('konsers');
    }
}
