<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function ticket()
    {
        return $this->hasOne(Ticket::class);
    }
}
