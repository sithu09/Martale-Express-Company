<?php

namespace App\Http\Controllers;

use App\Mandalay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MandalayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mandalays = DB::select('select * from mandalays');
        return view('Frontend.dev', ['mandalays' => $mandalays]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mandalay  $mandalay
     * @return \Illuminate\Http\Response
     */
    public function show(Mandalay $mandalay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mandalay  $mandalay
     * @return \Illuminate\Http\Response
     */
    public function edit(Mandalay $mandalay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mandalay  $mandalay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mandalay $mandalay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mandalay  $mandalay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mandalay $mandalay)
    {
        //
    }
}
