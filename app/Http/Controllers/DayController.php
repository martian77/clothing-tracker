<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($year = null, $month = null)
    {
        $now = new \DateTime();
        // Need to fetch the month and set it to current if not set.
        if ( empty( $month ) ) {
            $month = $now->format('m');
        }
        $intMonth = empty($month) ? $now->format('n') : (int) $month;
        $intYear = empty($year) ? $now->format('Y') : (int) $year;
        echo 'month ' . $intMonth;
        echo 'year ' . $intYear;

        $start_date = new \DateTime( $intYear . '-' . $intMonth . '-01' );
        $end_date = $start_date->add( new \DateInterval('P1M') );

        $user = Auth::user();
        $days = Day::where([
            ['day_date', '>=', $start_date->format('Y-m-d')],
            ['day_date', '<', $end_date->format('Y-m-d')],
            ['user_id', '=', $user->id],
        ])->get();
        \print_r($days);
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
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Day $day)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Day  $day
     * @return \Illuminate\Http\Response
     */
    public function destroy(Day $day)
    {
        //
    }
}
