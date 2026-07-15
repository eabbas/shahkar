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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('img')->unique();
            $table->string('title')->unique();
            $table->string('subTitle')->unique();
            $table->string('rightBtnText')->unique();
            $table->string('rightBtnLink')->unique();
            $table->string('rightBtnIcon')->nullable();
            $table->string('leftBtnText')->unique();
            $table->string('leftBtnLink')->unique();
            $table->string('leftBtnIcon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
