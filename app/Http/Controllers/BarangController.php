<?php

namespace App\Http\Controllers;

use Session;
use App\Barang;
use App\Kategori;
use Auth;
use File;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brg = Barang::with('Kategori')->get();
        return view('barang.index',compact('brg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $kat = Kategori::all();
        return view('barang.create',compact('brg','kat'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
        'nama_barang' => 'required|',
        'kode_barang' => 'required|',
        'harga' => 'required',
        'gambar' => 'required',
        'keterangan' => 'required',
        'kategori_id' => 'required'
    ]);
        $brg = new Barang;
        $brg->nama_barang = $request->nama_barang;
        $brg->kode_barang= $request->kode_barang;      
        $brg->harga= $request->harga;
        $brg->gambar= $request->gambar;
        $brg->keterangan= $request->keterangan;
        $brg->kategori_id = $request->kategori_id;
        $brg->save();
         // attach fungsinya untuk melampirkan data,yang dilampirkan disini ialah data dari method Hobi
         //  yang ada di model mahasiswa
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan <b>$brg->nama_barang</b>"
         ]);
          if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $brg->gambar = $filename;
            }
        $brg->save();
         return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
       $brg = Barang::findOrFail($id);
        return view('barang.show',compact('brg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brg = Barang::findOrFail($id);
         $kat= Kategori::all();
        $selectedkat = Barang::findOrFail($id)->kategori_id;
        // dd($selected);
        return view('barang.edit',compact('brg','kat','selectedkat'));
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
      $this->validate($request,[
        'nama_barang' => 'required|',
        'kode_barang' => 'required|',
        'harga' => 'required',
        'gambar' => 'required',
        'keterangan' => 'required',
        'kategori_id' => 'required'
    ]);
        $brg = Barang::findOrFail($id);
        $brg->nama_barang = $request->nama_barang;
        $brg->kode_barang= $request->kode_barang;      
        $brg->harga= $request->harga;
        $brg->gambar= $request->gambar;
        $brg->keterangan= $request->keterangan;
        $brg->kategori_id = $request->kategori_id;
        $brg->save();
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan <b>$brg->nama_barang</b>"
         ]);

          // edit upload foto
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($brg->gambar) {
        $old_foto = $brg->gambar;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/dist/img/'
        . DIRECTORY_SEPARATOR . $brg->gambar;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $brg->gambar = $filename;
}
    
        $brg->save();
         return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = Barang::findOrFail($id);
        $brg->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('barang.index');
    }
}

    