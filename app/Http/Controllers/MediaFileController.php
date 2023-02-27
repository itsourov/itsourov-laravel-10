<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMediaFileRequest;
use App\Http\Requests\UpdateMediaFileRequest;
use App\Models\MediaFile;

class MediaFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mediafiles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MediaFile $mediaFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MediaFile $mediaFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaFileRequest $request, MediaFile $mediaFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MediaFile $mediaFile)
    {
        //
    }
}
