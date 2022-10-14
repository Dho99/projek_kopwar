<?php

namespace App\Http\Controllers;

use App\Models\simpan;
use App\Http\Requests\StoresimpanRequest;
use App\Http\Requests\UpdatesimpanRequest;

class SimpanController extends Controller
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
     * @param  \App\Http\Requests\StoresimpanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresimpanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\simpan  $simpan
     * @return \Illuminate\Http\Response
     */
    public function show(simpan $simpan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\simpan  $simpan
     * @return \Illuminate\Http\Response
     */
    public function edit(simpan $simpan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesimpanRequest  $request
     * @param  \App\Models\simpan  $simpan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesimpanRequest $request, simpan $simpan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\simpan  $simpan
     * @return \Illuminate\Http\Response
     */
    public function destroy(simpan $simpan)
    {
        //
    }
}
