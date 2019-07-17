<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }

    public function seat()
    {
        return $this->hasOne(Seat::class);
    }
}
