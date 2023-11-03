<?php

namespace App\Http\Controllers;

use App\Services\Categories\GenreService;

class CategoryController extends Controller
{
    public function index(GenreService $service)
    {
        $category = $service->index();
        return view('index', compact('category'));
    }
}
