<?php

namespace App\Http\Controllers;

use App\Models\responden;
use App\Models\Aktor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;



class RespondenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respondens = Responden::all();
        $aktors = Aktor::where('status_pengguna', 'Responden')->get();
        return view('admin.responden', ['respondens' => $respondens, 'aktors' => $aktors]);
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
        $validator = Validator::make($request->all(), [
        'nim_responden' => 'required|numeric|digits:6',
        'nama_responden'  => 'required|min:3|max:50',
        'prodi'  => 'required|min:3|max:50',
        'no_ijazah'  => 'required|numeric|digits:10',
    ]);

        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }

        // Buat objek Responden berdasarkan input yang valid
        $respondenData = [
        'nim_responden' => $request->nim_responden,
        'nama_responden' => $request->nama_responden,
        'prodi' => $request->prodi,
        'no_ijazah' => $request->no_ijazah,
        ];

        // Simpan objek Responden ke dalam database
        Responden::create($respondenData);

        return Redirect::route('responden.index')->withSuccess('Data responden berhasil ditambahkan');
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\responden  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(responden $responden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\responden  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(responden $responden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\responden  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, responden $responden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\responden  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(responden $responden)
    {
        //
    }
}
