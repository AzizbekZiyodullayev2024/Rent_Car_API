<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->string('brand', 100);
            $table->string('model', 100);
            $table->integer('year');
            $table->string('engine_volume', 50);
            $table->string('fuel_consumption', 50);
            $table->string('transmission', 50);
            $table->string('fuel_type', 50);
            $table->integer('seats');
            $table->integer('doors');
            $table->integer('daily_price');
            $table->integer('deposit_amount');
            $table->enum('insurance_type', ['OSAGO', 'CASCO']);
            $table->integer('mileage_limit');
            $table->boolean('is_available')->default(true);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
