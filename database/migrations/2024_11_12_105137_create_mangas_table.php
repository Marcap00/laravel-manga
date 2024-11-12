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
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->decimal('price', total: 4, places: 2)->unsigned()->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('autor')->nullable(false);
            $table->string('genre')->nullable(false);
            $table->string('publisher')->nullable(false);
            $table->string('thumbs')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangas');
    }
};