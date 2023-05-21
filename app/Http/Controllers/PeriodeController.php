<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodes = Periode::all();
        return view('admin.periode',['periodes' => $periodes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.periode');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_periode'  => 'required|min:3|max:50',
            'tahun_periode' => 'required|numeric|digits:4',
        ]);

        Periode::create($validateData);
        $periodes = Periode::all();
        return view('admin.periode',['periodes' => $periodes]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(periode $periode)
    {
        //
    }
}
