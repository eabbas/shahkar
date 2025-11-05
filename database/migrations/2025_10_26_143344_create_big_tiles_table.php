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
        Schema::create('big_tiles', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('title');
            $table->string('text');
            $table->string('btn1_content');
            $table->string('btn1_href');
            $table->string('btn2_content');
            $table->string('btn2_href');
            $table->string('img');
            $table->string('bg_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('big_tiles');
    }
};
