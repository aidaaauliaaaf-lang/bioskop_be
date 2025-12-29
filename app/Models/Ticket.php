<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function film()
    {
        return $this->hasOne(Film::class, 'id', 'film_id');
    }
}
