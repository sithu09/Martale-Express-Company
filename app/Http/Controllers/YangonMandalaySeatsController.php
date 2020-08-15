<?php

namespace App\Http\Controllers;

use App\Yangon_Mandalay_Seats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YangonMandalaySeatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $seats = DB::select(array('A01', 'A02', 'A03'));
        // return view('Frontend.dev', ['seats' => $seats]);
        // $seats = DB::all('A01', 'A02', 'A03');
        // return view('Frontend.dev', ['seats' => $seats]);
        $lees = DB::select('select * from yangon__mandalay__seats');
        return view('Frontend.dev', ['lees' => $lees]);
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
     * @param  \App\Yangon_Mandalay_Seats  $yangon_Mandalay_Seats
     * @return \Illuminate\Http\Response
     */
    public function show(Yangon_Mandalay_Seats $yangon_Mandalay_Seats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yangon_Mandalay_Seats  $yangon_Mandalay_Seats
     * @return \Illuminate\Http\Response
     */
    public function edit(Yangon_Mandalay_Seats $yangon_Mandalay_Seats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yangon_Mandalay_Seats  $yangon_Mandalay_Seats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yangon_Mandalay_Seats $yangon_Mandalay_Seats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yangon_Mandalay_Seats  $yangon_Mandalay_Seats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yangon_Mandalay_Seats $yangon_Mandalay_Seats)
    {
        //
    }
}
