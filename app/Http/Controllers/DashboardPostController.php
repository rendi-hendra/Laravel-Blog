<?php

namespace App\Http\Controllers;

use App\Models\posting;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function show(posting $posting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function edit(posting $posting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posting $posting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posting  $posting
     * @return \Illuminate\Http\Response
     */
    public function destroy(posting $posting)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posting::class, "slug", $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
