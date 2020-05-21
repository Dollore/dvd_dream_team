<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    
    protected $table = 'director';
    protected $primaryKey = 'id_director';

    protected $fillable = [
        'firstname', 'lastname'
    ];

    public function films() {
        return $this->hasMany('App\Film', 'director_id', 'id_director');
    }
}
