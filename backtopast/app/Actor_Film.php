<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor_Film extends Model
{

    protected $primaryKey = 'id_actor_film';

    protected $fillable = [
        'user_id', 'actor_id'
    ];
}
