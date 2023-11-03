<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Film;
use App\Services\ReadyToWatch\IndexService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ReadyToWatchController extends Controller
{
    public function show($id)
    {

        $film = Film::find($id);
        $actors = Actor::whereHas('films', function (Builder $query ) use ($film){
            $query->where('films.id', $film->id);
        })->get();

        return view('layouts.readyToWatch', compact('film', 'actors'));





//        $category = Category::find($id);
//        $films = Film::whereHas('categories', function (Builder $query) use ($category)  {
//            $query->where('categories.id', $category->id);
//        })->get();
//        $categories = Category::all();

    }


}
