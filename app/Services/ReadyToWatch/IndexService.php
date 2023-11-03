<?php

namespace App\Services\ReadyToWatch;

use App\Models\Film;

class IndexService
{
    public function index()
    {
        $film = Film::find(1);
        return $film;
    }
}
