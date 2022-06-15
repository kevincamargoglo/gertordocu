<?php

namespace App\Http\Controllers;

use App\Models\Subfolder;
use App\Http\Requests\StoreSubfolderRequest;
use App\Http\Requests\UpdateSubfolderRequest;

class SubfolderController extends Controller
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
     * @param  \App\Http\Requests\StoreSubfolderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubfolderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subfolder  $subfolder
     * @return \Illuminate\Http\Response
     */
    public function show(Subfolder $subfolder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subfolder  $subfolder
     * @return \Illuminate\Http\Response
     */
    public function edit(Subfolder $subfolder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubfolderRequest  $request
     * @param  \App\Models\Subfolder  $subfolder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubfolderRequest $request, Subfolder $subfolder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subfolder  $subfolder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subfolder $subfolder)
    {
        //
    }
}
