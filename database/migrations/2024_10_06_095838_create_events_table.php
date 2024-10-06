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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->date('event_date');
            $table->time('event_time');
            $table->foreignId('city_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('location')->nullable();
            $table->string('gmaps_link')->nullable();
            $table->string('registration_link')->nullable();
            $table->string('image')->nullable();
            $table->string('replay')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
