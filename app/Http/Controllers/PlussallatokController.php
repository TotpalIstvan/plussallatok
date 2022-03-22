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
        $plussok = Plussallat::all();
        return response()->json($plussok);
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
        $plussallat = new Plussallat();
        $plussallat->fill($request->all());
        $plussallat->save();
        return response()->json($plussallat);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plussallat  $pluss
     * @return \Illuminate\Http\Response
     */
    public function show(Plussallat $pluss)
    {
        $plussallat = Plussallat::find($pluss);
        if(is_null($plussallat))
            return response()->json(["message" => "A megadott azonosítóval nem található plüssállat."]);
        return response()->json($plussallat);
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
        $plussallat = Plussallat::find($pluss);
        if(is_null($plussallat))
            return response()->json(["message" => "A megadott azonosítóval nem található plüssállat."]);
        $plussallat->fill($request->all());
        $plussallat->save();
        return response()->json($plussallat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plussallat  $pluss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plussallat $pluss)
    {
        $plussallat = Plussallat::find($pluss);
        if(is_null($plussallat))
            return response()->json(["message" => "A megadott azonosítóval nem található plüssállat."]);
        Plussallat::destroy($pluss);
        return response()->noContent();
    }
}
