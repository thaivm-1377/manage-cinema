<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\FilmRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Film;

class FilmRepository implements FilmRepositoryInterface
{
    public function all()
    {
        return Film::all();
    }

    public function find($id)
    {
        return Film::where('id', '=', $id)->first();
    }

    public function paginate()
    {
        $films = Film::sortable()
            ->select('films.*', DB::raw("SUM(tickets.price) as profit"))
            ->join('schedules', 'schedules.film_id', '=', 'films.id')
            ->join('tickets', 'tickets.schedule_id', '=', 'schedules.id')
            ->groupBy('films.id')
            ->paginate(10);

        return $films;
    }
}
