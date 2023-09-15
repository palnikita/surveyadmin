<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuels', function (Blueprint $table) {
            $table->id();
            $table->string('forestDistance');
            $table->integer('cookingFrequency');
            $table->integer('cookingHours');
            $table->string('cookingLocation');
            $table->string('cookstoveType');
            $table->string('fuelType');
            $table->string('firewoodSource')->nullable();
            $table->text('problems')->nullable();
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
        Schema::dropIfExists('fuels');
    }
};
