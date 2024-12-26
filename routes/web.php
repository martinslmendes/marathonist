<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::resource('/',SeriesController::class)->names('series');
