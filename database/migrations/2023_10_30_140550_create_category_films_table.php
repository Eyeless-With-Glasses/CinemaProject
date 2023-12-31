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
        Schema::create('category_films', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('film_id');

            $table->index('category_id', 'category_film_category_idx');
            $table->index('film_id', 'category_film_film_idx');

            $table->foreign('category_id', 'category_film_category_fk')->on('categories')->references('id');
            $table->foreign('film_id', 'category_film_film_fk')->on('films')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_films');
    }
};
