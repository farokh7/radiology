<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountings', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Mobile');
            $table->string('Date');
            $table->string('Day');
            $table->string('WeekDay');
            $table->string('Moon');
            $table->string('Year');
            $table->text('Description');
            $table->string('Price');
            $table->string('Insurance');
            $table->string('From');
            $table->string('Payment');
            $table->string('UserId');
            
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
        Schema::dropIfExists('accountings');
    }
}
