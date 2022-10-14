<?php

namespace App\Http\Controllers;

use App\Models\simpanan;
use App\Http\Requests\StoresimpananRequest;
use App\Http\Requests\UpdatesimpananRequest;

class SimpananController extends Controller
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
     * @param  \App\Http\Requests\StoresimpananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresimpananRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function show(simpanan $simpanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function edit(simpanan $simpanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesimpananRequest  $request
     * @param  \App\Models\simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesimpananRequest $request, simpanan $simpanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(simpanan $simpanan)
    {
        //
    }
}
