<?php

namespace App\Http\Controllers;

use App\Samurai;
use Illuminate\Http\Request;

class SamuraiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Samurai::destroy(2);
        $samurais = Samurai::all();
        $samurais = Samurai::withTrashed()->get();

        return view('samurais', ['samurais' => $samurais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSamurai()
    {
        
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novo_samurai = new Samurai;
        $novo_samurai->insereSamurai($request);

        return $novo_samurai;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Samurai  $samurai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Samurai  $samurai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Samurai  $samurai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Samurai  $samurai
     * @return \Illuminate\Http\Response
     */
    public function destroySamurai($id)
    {
        Samurai::destroy($id);
        return back();
    }
}
