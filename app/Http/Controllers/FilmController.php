<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Eloquent\Builder;


class FilmController extends Controller
{
    public function show($id)
    {
        $category = Category::find($id);
        $films = Film::whereHas('categories', function (Builder $query) use ($category)  {
            $query->where('categories.id', $category->id);
        })->get();
        $categories = Category::all();

        return view('index', compact('category', 'films', 'categories'));
    }

}
