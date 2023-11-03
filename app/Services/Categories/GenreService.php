<?php

namespace App\Services\Categories;

use App\Models\Category;

class GenreService
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }
}
