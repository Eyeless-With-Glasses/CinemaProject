<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function films()
    {
        return $this->belongsToMany(Film::class, 'category_films', 'category_id' , 'film_id');
    }
}
