<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGardeshkarRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardeshkar_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organ')->nullable();
            $table->text('desc')->nullable();
            
            $table->text('time')->nullable();
            $table->text('goal')->nullable();
            $table->text('audience')->nullable();
            
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('gardeshkar_requests');
    }
}
