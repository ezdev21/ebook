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
      $audioBooks=AudioBook::latest()->get();
      return view('audiobook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('audiobook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAudioBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAudioBookRequest $request)
    {
      $audioBook=new AudioBook();
      $audioBook->title=$request->title;
      $audioBook->save();
      $extension=$request->photo->extension();
      $audioBook->photo=$audioBook->id.$extension;
      $audioBook->file=$audioBook->id.'pdf';
      $audioBook->save();
      $request->file->saveAs('public',$audioBook->file,'audiobooks');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AudioBook  $audioBook
     * @return \Illuminate\Http\Response
     */
    public function show(AudioBook $audioBook)
    {
      return view('audiobook.show',['audioBook'=>$audioBook]);
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
