<?php

namespace App\Services\Films;

use App\Models\Film;

class AnimeService
{
    public function index()
    {
        // Используем whereHas для фильтрации фильмов, где категории содержат "Аниме"
        $films = Film::whereHas('categories', function ($query) {
            $query->where('genre', 'Аниме');
        })->get();

        return $films;
    }
}
