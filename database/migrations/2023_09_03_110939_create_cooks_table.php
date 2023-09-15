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
        Schema::create('cooks', function (Blueprint $table) {
            $table->id();
            $table->boolean('charcoalUsage')->default(false);
            $table->integer('charcoalQuantity')->nullable();
            $table->string('charcoalUnit')->nullable();
            $table->decimal('charcoalMoney', 10, 2)->nullable();

            $table->boolean('firewoodUsage')->default(false);
            $table->integer('firewoodQuantity')->nullable();
            $table->string('firewoodUnit')->nullable();
            $table->decimal('firewoodMoney', 10, 2)->nullable();

            $table->boolean('lpgUsage')->default(false);
            $table->integer('lpgQuantity')->nullable();
            $table->decimal('lpgMoney', 10, 2)->nullable();

            $table->boolean('keroseneUsage')->default(false);
            $table->integer('keroseneQuantity')->nullable();
            $table->decimal('keroseneMoney', 10, 2)->nullable();

            $table->boolean('coalUsage')->default(false);
            $table->integer('coalQuantity')->nullable();
            $table->string('coalUnit')->nullable();
            $table->decimal('coalMoney', 10, 2)->nullable();

            $table->boolean('electricityUsage')->default(false);
            $table->decimal('electricityQuantity', 10, 2)->nullable();
            $table->decimal('electricityMoney', 10, 2)->nullable();
            $table->string('otherFuelUsage')->nullable();
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
        Schema::dropIfExists('cooks');
    }
};
