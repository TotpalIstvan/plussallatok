<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plussallat;

class PlussallatokController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plussok = Plussallat::orderBy('id')->get();
        return view('plussok.index', [ 'plussok' => $plussok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plussok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adatok = $request->only(['név']);
        $pluss = new Plussallat();
        $pluss->fill($adatok);
        $pluss->save();
        return redirect()->route('plussok.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plussallat  $pluss
     * @return \Illuminate\Http\Response
     */
    public function show(Plussallat $pluss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plussallat  $pluss
     * @return \Illuminate\Http\Response
     */
    public function edit(Plussallat $pluss)
    {
        return view('plussok.edit',['pluss' =>$pluss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plussallat  $pluss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plussallat $pluss)
    {
        $adatok = $request->only(['név']);
        $pluss->fill($adatok);
        $pluss->save();
        return redirect()->route('plussok.index', $pluss->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plussallat  $pluss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plussallat $pluss)
    {
        $pluss->delete();
        return redirect()->route('plussok.index');
    }
}
