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
        Schema::create('jumbotrons', function (Blueprint $table) {
            $table->id(); // Id Gambar
            $table->string('title')->nullable(); // Judul gambar
            $table->string('image_url'); // URL atau path gambar
            $table->timestamps(); // Waktu Upload Gambar
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jumbotrons');
    }
};
