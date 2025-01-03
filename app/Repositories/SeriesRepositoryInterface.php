<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;

interface SeriesRepositoryInterface {

    public function store(SeriesFormRequest $request): Series;
}