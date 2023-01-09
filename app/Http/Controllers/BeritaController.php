<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('berita' , [
            "title" => "Berita",
            "berita" => Berita::all()
        ]);
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
     * @param  \App\Http\Requests\StoreBeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $detil_berita)
    {
        return view('detil_berita' , [
            "title" => "Detil Berita",
            "db" => $detil_berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeritaRequest  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
