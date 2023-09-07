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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('desc');
            $table->text('body');
            $table->string('contoh_gambar')->nullable();
            $table->string('contoh_suara')->nullable();
            $table->string('text_suara')->nullable();
            $table->string('link_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};