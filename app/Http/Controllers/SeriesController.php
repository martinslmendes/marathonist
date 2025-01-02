<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('series.index')
            ->with('series', Series::all()->sortBy('name'))
            ->with('successMessage', session('message.success'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Series::create($request->all());
        return to_route('series.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Series $series)
    {
        if ($request->action == 'delete') {
            Series::destroy($series->id);
            $request->session()->flash('message.success', 'Series deleted successfully');
        } else if ($request->action == 'save') {
            $series->fill($request->all());
            $series->save();
        }
        return to_route('series.index');
    }
}
