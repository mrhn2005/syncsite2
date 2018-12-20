<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmorghTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmorgh_teams', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('team_name')->nullable();
            $table->text('customer')->nullable();
            $table->text('customer_need')->nullable();
            $table->text('customer_solution')->nullable();
            $table->text('opponent')->nullable();
            $table->text('opponent_advantage')->nullable();
            $table->text('cost')->nullable();
            $table->text('idea')->nullable();
            $table->text('progress')->nullable();
            $table->text('know')->nullable();
            $table->string('file')->nullable();
            $table->string('resume')->nullable();
            $table->integer('mode_id')->nullable();
            
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
        Schema::dropIfExists('cmorgh_teams');
    }
}
