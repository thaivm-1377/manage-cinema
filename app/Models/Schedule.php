<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
}
