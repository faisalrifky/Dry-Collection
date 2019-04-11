<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produksi;
use Session;
class ProduksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        $produksi = Produksi::all();
        return view('produksi.index',compact('produksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produksi.create');
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
        'foto' => 'required',
        'deskripsi' => 'required'
        
    ]);
        $produksi = new Produksi;
        $produksi->foto= $request->foto;
        $produksi->deskripsi= $request->deskripsi;
        $produksi->save();
         // attach fungsinya untuk melampirkan data,yang dilampirkan disini ialah data dari method Hobi
         //  yang ada di model mahasiswa
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan <b>$produksi->foto</b>"
         ]);
          if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $produksi->foto = $filename;
            }
        $produksi->save();
         return redirect()->route('produksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produksi= Produksi::findOrFail($id);
        return view('produksi.show',compact('produksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $produksi = Produksi::findOrFail($id);
        return view('produksi.edit',compact('produksi'));
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
        'foto' => 'required',
         'deskripsi' => 'required'
    
    ]);
        $produksi = Produksi::findOrFail($id);
        $produksi->foto= $request->foto;
         $produksi->deskripsi= $request->deskripsi;
        $produksi->save();
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan <b>$produksi->foto</b>"
         ]);

          // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($produksi->foto) {
        $old_foto = $produksi->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/dist/img/'
        . DIRECTORY_SEPARATOR . $produksi->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $produksi->foto = $filename;
}
    
        $produksi->save();
         return redirect()->route('produksi.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produksi = Produksi::findOrFail($id);
        $produksi->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('produksi.index');
    }
}
