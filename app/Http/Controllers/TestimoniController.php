<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
use Session;
class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index',compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
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
        
    ]);
        $testimoni = new Testimoni;
        $testimoni->foto= $request->foto;
        $testimoni->save();
         // attach fungsinya untuk melampirkan data,yang dilampirkan disini ialah data dari method Hobi
         //  yang ada di model mahasiswa
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan <b>$testimoni->foto</b>"
         ]);
          if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $testimoni->foto = $filename;
            }
        $testimoni->save();
         return redirect()->route('testimoni.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimoni= Testimoni::findOrFail($id);
        return view('testimoni.show',compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $testimoni = Testimoni::findOrFail($id);
        return view('testimoni.edit',compact('testimoni'));
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
    
    ]);
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->foto= $request->foto;
        $testimoni->save();
         Session::flash("flash_notification", [
         "level"=>"success",
         "message"=>"Berhasil menyimpan <b>$testimoni->foto</b>"
         ]);

          // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/admin/dist/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($testimoni->foto) {
        $old_foto = $testimoni->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/admin/dist/img/'
        . DIRECTORY_SEPARATOR . $testimoni->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $testimoni->foto = $filename;
}
    
        $testimoni->save();
         return redirect()->route('testimoni.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('testimoni.index');
    }
}
