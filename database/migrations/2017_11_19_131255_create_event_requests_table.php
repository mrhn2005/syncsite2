<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('organ')->nullable();
            $table->text('desc')->nullable();
            $table->string('location')->nullable();
            $table->string('time')->nullable();
            $table->string('duration')->nullable();
            $table->text('attendant')->nullable();
            $table->string('min')->nullable();
            $table->string('max')->nullable();
            $table->text('goal')->nullable();
            $table->text('model')->nullable();
            $table->text('history')->nullable();
            $table->text('number')->nullable();
            $table->text('audience')->nullable();
            $table->text('content')->nullable();
            $table->text('cost')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('background')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('event_requests');
    }
}
