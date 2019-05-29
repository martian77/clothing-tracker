<?php

namespace App\Http\Controllers;

use App\Clothing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClothingController extends Controller
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
    public function index()
    {
        print_r( 'This will list clothing. ' );
        $user = Auth::user();
        $clothing = $user->clothing();
        print_r( 'Particularly for user ' . $user->name );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clothing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $clothing = new Clothing();

        $clothing->name = $request->name;
        $clothing->description = $request->description;
        $clothing->arrived = $request->arrived;
        $clothing->retired = $request->retired;
        $user->clothing()->save( $clothing );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function show(Clothing $clothing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function edit(Clothing $clothing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clothing $clothing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clothing $clothing)
    {
        //
    }
}
