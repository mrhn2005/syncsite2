<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organ')->nullable();
            $table->text('desc')->nullable();
            $table->string('location')->nullable();
            $table->text('time')->nullable();
            $table->text('goal')->nullable();
            $table->text('audience')->nullable();
            $table->text('subject')->nullable();
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
        Schema::dropIfExists('workshop_requests');
    }
}
