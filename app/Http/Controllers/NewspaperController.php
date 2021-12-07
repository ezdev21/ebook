<?php

namespace App\Http\Controllers;

use App\Models\Newspaper;
use App\Http\Requests\StoreNewspaperRequest;
use App\Http\Requests\UpdateNewspaperRequest;
use App\Models\Megazine;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('newspaper.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('newspaper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewspaperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewspaperRequest $request)
    {
      $newspaper=new Megazine();
      $newspaper->title=$request->title;
      $newspaper->save();
      $extension=$request->photo->extension();
      $newspaper->photo=$newspaper->id.$extension;
      $newspaper->file=$newspaper->id.'pdf';
      $newspaper->save();
      $request->file->saveAs('public',$newspaper->file,'audiobooks');
      $newspaper->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function show(Newspaper $newspaper)
    {
      return view('newspaper.show',['newspaper'=>$newspaper]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function edit(Newspaper $newspaper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewspaperRequest  $request
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewspaperRequest $request, Newspaper $newspaper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newspaper  $newspaper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newspaper $newspaper)
    {
        //
    }
}
