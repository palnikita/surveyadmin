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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('respondent_name');
            $table->integer('age');
            $table->string('sex');
            $table->string('location');
            $table->string('phone')->nullable();
            $table->string('occupation');
            $table->decimal('income', 10, 2);
            $table->string('economic_class');
            $table->integer('adult_members');
            $table->integer('children');
            $table->string('documents')->nullable();
            $table->string('document_number')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
