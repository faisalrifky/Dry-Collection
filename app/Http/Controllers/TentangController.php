<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tentang;
use Session;
class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        $ttg = Tentang::all();
        return view('tentang.index',compact('ttg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tentang.create');
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
            'gambar' => 'required|',
            'deskripsi' => 'required|',
            
        ]);
        $ttg = new Tentang;
        $ttg->gambar = $request->gambar;
        $ttg->deskripsi = $request->deskripsi;        
        $ttg->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$ttg->deskripsi</b>"
        ]);
        return redirect()->route('tentang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ttg= Tentang::findOrFail($id);
        return view('tentang.show',compact('ttg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ttg = Tentang::findOrFail($id);
        return view('tentang.edit',compact('ttg'));
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
            'gambar' => 'required|',
            'deskripsi' => 'required|',
           
        ]);
        $ttg = Tentang::findOrFail($id);
        $ttg->gambar = $request->gambar;
        $ttg->deskripsi = $request->deskripsi;
        $ttg->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$ttg->deskripsi</b>"
        ]);
        return redirect()->route('tentang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ttg = Tentang::findOrFail($id);
        $ttg->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('tentang.index');
    }
}
