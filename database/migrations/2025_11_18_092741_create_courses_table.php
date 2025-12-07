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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('summary');
            $table->string('price');
            $table->string('discount');
            $table->string('img') -> nullable();
            $table->string('video')-> nullable();
            $table->string('free') -> default("0");
            $table->string('show_in_home') -> default("0");;
            $table->string('duration');
            $table->string('progress');
            $table->string('category_id');
            $table->string('status_id');
            $table->string('level_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
