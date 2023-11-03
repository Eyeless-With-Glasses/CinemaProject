<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Services\ReadyToWatch\IndexService;
use Illuminate\Http\Request;

class ReadyToWatchController extends Controller
{
    public function show($id)
    {
        $film = Film::find($id);
        return view('layouts.readyToWatch', compact('film'));
    }

}
