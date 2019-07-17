<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\FilmRepositoryInterface;
use App\Http\Requests\UpdateUserRequest;
use Auth;

class AdminController extends Controller
{
    protected $userRepository;
    protected $filmRepository;

    public function __construct(
        UserRepositoryInterface $userRepository,
        FilmRepositoryInterface $filmRepository
    ) {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
        $this->filmRepository = $filmRepository;
    }

    public function index()
    {
        $listuser = $this->userRepository->paginate();
        $numberUser = count($this->userRepository->all());
        $numberReport = count($this->filmRepository->all());

        return view('backend.index', compact('numberUser', 'numberReport'));
    }
}
