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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table -> integer("course_id");
            $table -> string("title");
            $table -> text("description");
            $table -> string("price") -> nullable();
            $table -> string("order");
            $table -> string("free") -> default("0");
            $table -> string("duration");
            $table -> integer("season_id");
            $table -> string("duration");
            $table -> string("video_path");
            $table -> string("video_type");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
