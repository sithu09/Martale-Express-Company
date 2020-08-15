<?php

namespace App\Http\Controllers;

use App\NewsInsert;
use Illuminate\Http\Request;

class NewsInsertController extends Controller
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
        $newinsert = new NewsInsert;
        $newinsert->title = $request->title;
        $newinsert->detail = $request->detail;
        $newinsert->save();
        return view('Backend.news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewsInsert  $newsInsert
     * @return \Illuminate\Http\Response
     */
    public function show(NewsInsert $newsInsert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsInsert  $newsInsert
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsInsert $newsInsert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsInsert  $newsInsert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsInsert $newsInsert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewsInsert  $newsInsert
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsInsert $newsInsert)
    {
        //
    }
}
