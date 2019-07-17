<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\FilmRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Auth;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $filmRepository;

    public function __construct(
        FilmRepositoryInterface $filmRepository
    ) {
        $this->filmRepository = $filmRepository;
    }

    public function index()
    {
        $films = $this->filmRepository->paginate();

        return view('backend.films.list-film', compact('films'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = $this->filmRepository->find($id); 
        $sellTickets = DB::table('schedules')
            ->join('tickets', 'tickets.schedule_id', '=', 'schedules.id')
            ->select('tickets.id')
            ->where('schedules.film_id', '=', $id)
            ->whereNotNull('tickets.booking_id');
        
        $numberOfSellTickets = $sellTickets->count();

        $profit = $sellTickets->sum('price');

        return view('backend.films.film-detail', compact('film', 'numberOfSellTickets', 'profit'));
    }
}
