<?php

namespace App\Http\Controllers;

use App\Models\LaporanHarian;
use Illuminate\Http\Request;

class   LaporanHarianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = LaporanHarian::all();
        return view('laporan',compact('laporan'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            //put fields to be validated here
            ]);         
       
        $laporan = new LaporanHarian();
        $laporan->Tanggal= $request['Tanggal'];
        $laporan->Waktu= $request['Waktu'];
        
        
        $laporan->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
