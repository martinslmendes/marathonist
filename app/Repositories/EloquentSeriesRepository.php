<?php

namespace App\Repositories;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;

class EloquentSeriesRepository implements SeriesRepositoryInterface
{
    public function store(SeriesFormRequest $request): Series
    {
        return Series::create($request->all());
    }
}
