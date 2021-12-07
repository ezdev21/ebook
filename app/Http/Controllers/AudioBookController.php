<?php

namespace App\Http\Controllers;

use App\Models\AudioBook;
use App\Http\Requests\StoreAudioBookRequest;
use App\Http\Requests\UpdateAudioBookRequest;

class AudioBookController extends Controller
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
     * @param  \App\Http\Requests\StoreAudioBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAudioBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AudioBook  $audioBook
     * @return \Illuminate\Http\Response
     */
    public function show(AudioBook $audioBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AudioBook  $audioBook
     * @return \Illuminate\Http\Response
     */
    public function edit(AudioBook $audioBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAudioBookRequest  $request
     * @param  \App\Models\AudioBook  $audioBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAudioBookRequest $request, AudioBook $audioBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AudioBook  $audioBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudioBook $audioBook)
    {
        //
    }
}
