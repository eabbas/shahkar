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
        Schema::create('userpayments', function (Blueprint $table) {
            $table->id();
            $table -> integer("user_id");
            $table -> string("payment");
            $table -> string("meta_id");
            $table -> string("value");
            $table -> integer("status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userpayments');
    }
};
