<?php

namespace App\Http\Controllers;

use App\Models\Press;
use App\Http\Requests\StorePressRequest;
use App\Http\Requests\UpdatePressRequest;

class PressController extends Controller
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
     * @param  \App\Http\Requests\StorePressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function show(Press $press)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function edit(Press $press)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePressRequest  $request
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePressRequest $request, Press $press)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Press  $press
     * @return \Illuminate\Http\Response
     */
    public function destroy(Press $press)
    {
        //
    }
}
