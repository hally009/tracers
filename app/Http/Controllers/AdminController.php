<?php

namespace App\Http\Controllers;

use App\Models\Aktor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function menuAdmin()
    {
        return view('admin.menuAdmin');
    }

    public function konfigurasi()
    {
        return view('admin.konfigurasi');
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
     * @param  \App\Models\Aktor  $aktor
     * @return \Illuminate\Http\Response
     */
    public function show(Aktor $aktor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aktor  $aktor
     * @return \Illuminate\Http\Response
     */
    public function edit(Aktor $aktor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aktor  $aktor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aktor $aktor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aktor  $aktor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aktor $aktor)
    {
        //
    }
}
