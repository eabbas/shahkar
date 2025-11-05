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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            // $table->string('image')->nullable();
            // $table->string('images')->nullable();
            $table->string('summary')->nullable();
            // $table->string('Specifications')->nullable();
            // $table->integer('price');
            // $table->integer('discountPercent')->nullable();
            $table->integer('category_id');
            $table->tinyInteger('is_in_home')->nullable();
            $table->string('brand')->nullable();
            $table->integer('score')->default(1);
            // $table->integer('amount');
            // $table->integer('functionality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
