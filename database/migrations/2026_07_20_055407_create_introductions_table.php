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
        Schema::create('introductions', function (Blueprint $table) {
            $table->id();
            $table->string('video');
            $table->string('videoCover')->nullable();
            $table->string('firstBoxText');
            $table->string('firstBoxNumber');
            $table->string('firstBoxIcon')->nullable();
            $table->string('secondBoxText');
            $table->string('secondBoxNumber');
            $table->string('secondBoxIcon')->nullable();
            $table->string('thirdBoxText');
            $table->string('thirdBoxNumber');
            $table->string('thirdBoxIcon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('introductions');
    }
};
