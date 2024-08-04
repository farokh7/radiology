<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoghoghsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoghoghs', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Hour');
            $table->string('PayForHour');
            $table->string('Price');
            $table->string('Moon');
            $table->string('Year');
            $table->string('OverPay');
            $table->string('Business');
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
        Schema::dropIfExists('hoghoghs');
    }
}
