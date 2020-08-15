<?php

namespace App\Http\Controllers;

use App\yangon_mandalay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YangonMandalayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seatnos = DB::select('select * from yangon_mandalays');
        return view('Frontend.dev', ['seatnos' => $seatnos]);
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
     * @param  \App\yangon_mandalay  $yangon_mandalay
     * @return \Illuminate\Http\Response
     */
    public function show(yangon_mandalay $yangon_mandalay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\yangon_mandalay  $yangon_mandalay
     * @return \Illuminate\Http\Response
     */
    public function edit(yangon_mandalay $yangon_mandalay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\yangon_mandalay  $yangon_mandalay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, yangon_mandalay $yangon_mandalay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\yangon_mandalay  $yangon_mandalay
     * @return \Illuminate\Http\Response
     */
    public function destroy(yangon_mandalay $yangon_mandalay)
    {
        //
    }
}
