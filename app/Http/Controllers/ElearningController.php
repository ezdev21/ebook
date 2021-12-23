<?php

namespace App\Http\Controllers;

use App\Models\Elearning;
use App\Http\Requests\StoreElearningRequest;
use App\Http\Requests\UpdateElearningRequest;

class ElearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreElearningRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElearningRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function show(Elearning $elearning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function edit(Elearning $elearning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElearningRequest  $request
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElearningRequest $request, Elearning $elearning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elearning $elearning)
    {
        //
    }
}
