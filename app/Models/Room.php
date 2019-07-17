<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function seat()
    {
        return $this->hasMany(Seat::class);
    }

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
