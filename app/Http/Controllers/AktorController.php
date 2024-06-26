<?php

namespace App\Http\Controllers;

use App\Models\Aktor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class AktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aktors = Aktor::all();
        return view('admin.aktor',['aktors' => $aktors]);
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
        $validatorAktor = Validator::make($request->all(), [
            'status_pengguna' => 'required|min:3|max:25',
            'kata_pengguna' => 'required|numeric|digits:6',
            'kata_sandi' => 'required|numeric|digits:6',
        ]);

        if ($validatorAktor->fails()) {
            return redirect()->back()->withErrors($validatorAktor)->withInput();
        }

        Aktor::create($request->all());

        return redirect()->route('aktor.index')->with('success', 'Data Akun berhasil ditambahkan');

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
