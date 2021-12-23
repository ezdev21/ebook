<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Http\Requests\StoreAcademyRequest;
use App\Http\Requests\UpdateAcademyRequest;

class AcademyController extends Controller
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
     * @param  \App\Http\Requests\StoreAcademyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAcademyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function show(Academy $academy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function edit(Academy $academy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAcademyRequest  $request
     * @param  \App\Models\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcademyRequest $request, Academy $academy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Academy  $academy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Academy $academy)
    {
        //
    }
}
