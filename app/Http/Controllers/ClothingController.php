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
        $user = Auth::user();
        $clothing = $user->clothing()->paginate(10);
        $data = [
            'user' => $user,
            'clothing' => $clothing,
        ];
        return view('clothing.index', $data);
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
        $data = [
            'user' => Auth::user(),
            'clothing' => $clothing,
        ];
        return view('clothing.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function edit(Clothing $clothing)
    {
        $data = [
            'clothing' => $clothing,
        ];
        return view('clothing.edit', $data);
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
        $clothing->name = $request->name;
        $clothing->description = $request->description;
        $clothing->arrived = $request->arrived;
        $clothing->retired = $request->retired;

        $clothing->save();
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
