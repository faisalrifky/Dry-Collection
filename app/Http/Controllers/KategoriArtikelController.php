<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;
class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kategoria = KategoriArtikel::all();
        // dd($kategori);
        return view('kategoria.index',compact('kategoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('kategoria.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategoria = new KategoriArtikel;
        $kategoria->nama_kategori = $request->nama_kategori;
        $kategoria->slug = str_slug($request->nama_kategori,'-');
        // dd($kategoria);
        $kategoria->save();
        return redirect()->route('kategoriartikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kategoria = KategoriArtikel::findOrFail($id);
          return view('kategoria.edit',compact('kategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $kategoria = kategoriArtikel::findOrFail($id);
        $kategoria->nama_kategori = $request->nama_kategori;
        // dd($kategori);
        $kategoria->save();
        return redirect()->route('kategoriartikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kategoria = KategoriArtikel::findOrFail($id);
        $kategoria->delete();
        return redirect()->route('kategoriartikel.index');
    }
}
