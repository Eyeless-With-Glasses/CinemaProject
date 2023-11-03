<?php

namespace App\Http\Controllers;

use App\Services\Categories\GenreService;
use App\Services\Films\IndexService;


class HomeController extends Controller
{
    public function index(IndexService $indexService, GenreService $genreService)
    {
        $categories = $genreService->index();
        $films = $indexService->index();

        return view('index', compact('categories', 'films'));
    }
}
