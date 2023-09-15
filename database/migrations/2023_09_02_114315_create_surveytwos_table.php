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
        Schema::create('surveytwos', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');

            $table->string('middleName');

            $table->string('lastName');

            $table->string('village');

            $table->string('taluka');

            $table->string('district');

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
        Schema::dropIfExists('surveytwos');
    }
};
