<?php

namespace App\Http\Controllers;

use App\perencanaan;
use Illuminate\Http\Request;

class PerencanaanController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perencanaan = new perencanaan;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function show(perencanaan $perencanaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function edit(perencanaan $perencanaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perencanaan $perencanaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\perencanaan  $perencanaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(perencanaan $perencanaan)
    {
        //
    }
}
