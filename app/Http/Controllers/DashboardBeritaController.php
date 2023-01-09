<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index',[
            'berita'=>Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create' , [
            'kategori'=> kategori::all()
        ]);
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
            'judul_berita' => 'required|max:255',
            'slug' => 'required',
            'kategori_id' => 'required',
            'isi_berita' => 'required',
            'foto' => 'image|file|max:1024'
        ]);

        $validateData['excerpt'] = Str::limit(strip_tags($request->isi_berita), 100);

        $validateData['foto'] = $request->file('foto')->store('berita-foto');

        berita::create($validateData);

        return redirect('/dashboard/berita')->with('sukses', 'Berita Baru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $beritum)
    {
        return view('dashboard.berita.show', [
            'berita'=> $beritum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $beritum)
    {
        return view('dashboard.berita.edit', [
            'berita'=> $beritum,
            'kategori'=> kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    {
        $rules = [
            'judul_berita' => 'required|max:255',
            'kategori_id' => 'required',
            'isi_berita' => 'required',
            'foto' => 'image|file|max:1024'
        ];

        if($request->slug != $beritum->slug){
            $rules['slug']='required|unique:beritas';
        }
        $validateData = $request->validate($rules);
        
        $validateData['excerpt'] = Str::limit(strip_tags($request->isi_berita), 100);

        if($request->file('foto')){
            if ($request->foto_lama){
                Storage::delete($request->foto_lama);
            }
            $validateData['foto'] = $request->file('foto')->store('berita-foto');
        }
        Berita::where('id', $beritum->id)->update($validateData);

        return redirect('/dashboard/berita')->with('sukses', 'Data Berita Berhasil Di Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        if($beritum->foto){
            Storage::delete($beritum->id);
        }

        Berita::destroy($beritum->id);

        return redirect('/dashboard/berita')->with('sukses', 'Data Berita Berhasil Dihapus!');
    }
    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->judul_berita);

        return response()->json(['slug'=>$slug]);
    }
}