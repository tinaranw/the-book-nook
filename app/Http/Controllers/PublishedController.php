<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublishedRequest;
use App\Http\Requests\UpdatePublishedRequest;
use App\Models\Published;

class PublishedController extends Controller
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
     * @param  \App\Http\Requests\StorePublishedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublishedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Published  $published
     * @return \Illuminate\Http\Response
     */
    public function show(Published $published)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Published  $published
     * @return \Illuminate\Http\Response
     */
    public function edit(Published $published)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublishedRequest  $request
     * @param  \App\Models\Published  $published
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublishedRequest $request, Published $published)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Published  $published
     * @return \Illuminate\Http\Response
     */
    public function destroy(Published $published)
    {
        //
    }
}
