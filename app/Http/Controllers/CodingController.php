<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCodingRequest;
use App\Http\Requests\UpdateCodingRequest;
use App\Models\Coding;

class CodingController extends Controller
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
     * @param  \App\Http\Requests\StoreCodingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCodingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coding  $coding
     * @return \Illuminate\Http\Response
     */
    public function show(Coding $coding)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coding  $coding
     * @return \Illuminate\Http\Response
     */
    public function edit(Coding $coding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCodingRequest  $request
     * @param  \App\Models\Coding  $coding
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCodingRequest $request, Coding $coding)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coding  $coding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coding $coding)
    {
        //
    }
}
