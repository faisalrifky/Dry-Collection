<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;
use Session;
use App\KategoriArtikel;
use File;
use Auth;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $artikel = Artikel::all();
        // dd($artikel);
        return view('artikel.index',compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $kategoria = KategoriArtikel::all();
        return view('artikel.create',compact('kategoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = Auth::user()->id;
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->slug =str_slug($request->judul,'-');
        $artikel->kategori_artikel_id = $request->kategori_artikel_id;
        $artikel->user_id = $user;
        // $artikel->publish = $request->publish;
        // upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikel->foto = $filename;
            }
        $artikel->save();
        return redirect()->route('artikel.index');
    
    }

    public function Publish($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel->status === 1) {
            $artikel->status = 0;
        } else {
            $artikel->status= 1;
        }

        $artikel->save();
        return redirect()->route('artikel.index');
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
        $artikel = Artikel::findOrFail($id);
        $kategoria = KategoriArtikel::all();
        return view('artikel.edit',compact('artikel','kategoria'));
        
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
          $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->slug =str_slug($request->judul,'-');
        $artikel->kategori_artikel_id = $request->kategori_artikel_id;
        // $artikel->publish = $request->publish;

        // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/fotoartikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($artikel->foto) {
        $old_foto = $artikel->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/fotoartikel'
        . DIRECTORY_SEPARATOR . $artikel->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikel->foto = $filename;
}
    
        $artikel->save();
        // dd($artikel);
        return redirect()->route('artikel.index');
    }

 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/fotoartikel/'
            . DIRECTORY_SEPARATOR . $artikel->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
            $artikel->delete();
    
        return redirect()->route('artikel.index');
    }
}