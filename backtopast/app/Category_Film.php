<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Film extends Model
{
    protected $primaryKey = 'id_category_film';

    protected $fillable = [
        'category_id', 'film_id'
    ];
}
