<?php

namespace App\Http\Controllers;

use App\Models\Megazine;
use App\Http\Requests\StoreMegazineRequest;
use App\Http\Requests\UpdateMegazineRequest;

class MegazineController extends Controller
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
     * @param  \App\Http\Requests\StoreMegazineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMegazineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Megazine  $megazine
     * @return \Illuminate\Http\Response
     */
    public function show(Megazine $megazine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Megazine  $megazine
     * @return \Illuminate\Http\Response
     */
    public function edit(Megazine $megazine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMegazineRequest  $request
     * @param  \App\Models\Megazine  $megazine
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMegazineRequest $request, Megazine $megazine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Megazine  $megazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Megazine $megazine)
    {
        //
    }
}
