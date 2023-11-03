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
        Schema::create('actor_films', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('film_id');

            $table->index('actor_id', 'actor_film_actor_idx');
            $table->index('film_id', 'actor_film_film_idx');

            $table->foreign('actor_id', 'actor_film_actor_fk')->on('actors')->references('id');
            $table->foreign('film_id', 'actor_film_film_fk')->on('films')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor_films');
    }
};
