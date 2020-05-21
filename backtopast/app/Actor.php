<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Film;

class Actor extends Model
{

    protected $table = 'actor';
    protected $primaryKey = 'id_actor';

    protected $fillable = [
        'firstname', 'lastname'
    ];

    public function films() {
        return $this->belongsToMany('App\Film', 'actor_film', 'film_id', 'actor_id');
    }
}
