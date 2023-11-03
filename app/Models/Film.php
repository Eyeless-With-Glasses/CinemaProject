<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_films', 'film_id', 'category_id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'actor_films', 'film_id', 'actor_id');
    }
}
