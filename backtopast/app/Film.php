<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Actor;
use App\Borrowing;

class Film extends Model
{
    
    protected $table = 'film';
    protected $primaryKey = 'id_film';

    protected $fillable = [
        'title', 'pathname', 'premiere_year', 'decription', 'borrowed', 'director_id', 'created_at'
    ];

    public function director()
    {
        return $this->belongsTo('App\Director', 'director_id', 'id_director');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'category_film', 'film_id', 'category_id');
    }

    public function actors() {
        return $this->belongsToMany('App\Actor', 'actor_film', 'film_id', 'actor_id');
    }

    public function borrowings() {
        return $this->hasMany('App\Borrowing', 'film_id', 'id_film');
    }
}
