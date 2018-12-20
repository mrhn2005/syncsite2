<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_workshops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('poster')->nullable();
            $table->string('register_link')->nullable();
            $table->integer('active')->default(0);
            $table->integer('event')->default(0);
            $table->integer('payment')->default(0);
            $table->text('desc')->nullable();
            $table->string('date')->nullable();
            $table->string('slug')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('past_workshops');
    }
}
