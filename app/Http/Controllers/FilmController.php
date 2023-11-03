<?php

namespace App\Http\Controllers;

use App\Services\Films\AnimeService;
use App\Services\Films\IndexService;

class FilmController extends Controller
{
    public function index(AnimeService $service)
    {
        $films = $service->index();

        return view('index', compact('films'));
    }
}
