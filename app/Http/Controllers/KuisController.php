<?php

namespace App\Http\Controllers;

use App\Models\kuis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;



class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kuis');
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

}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kuis  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(kuis $kuis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kuis  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(kuis $kuis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kuis  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kuis $kuis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kuis  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(kuis $kuis)
    {
        //
    }
}
