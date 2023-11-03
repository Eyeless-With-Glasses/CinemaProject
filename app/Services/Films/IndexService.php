<?php

namespace App\Services\Films;

use App\Models\Film;

class IndexService
{
    public function index()
    {
        $name = Film::all();
        return $name;
    }
}
