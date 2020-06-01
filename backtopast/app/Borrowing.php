<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Film;

class Borrowing extends Model
{
    protected $table = 'borrowing';
    protected $primaryKey = 'id_borrowing';

    protected $fillable = [
        'created_at', 'user_id', 'film_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id_user');
    }

    public function film()
    {
        return $this->belongsTo('App\Film', 'film_id', 'id_film');
    }
}
