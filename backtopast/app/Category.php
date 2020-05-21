<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'category_name'
    ];

    public function films() {
        return $this->belongsToMany('App\Film', 'category_film', 'film_id', 'category_id');
    }
}
