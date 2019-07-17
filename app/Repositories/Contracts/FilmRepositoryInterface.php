<?php

namespace App\Repositories\Contracts;

interface FilmRepositoryInterface
{
    public function find($id);

    public function paginate();
}
