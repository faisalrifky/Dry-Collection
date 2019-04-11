<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ Barang;
use App\Artikel;
use App\Kategori;
use App\ContactUS;
use Mail;

class FrontendController extends Controller
{
     public function home()
    {
    	$home = Barang::all();
    	return view('frontend.home', compact('home'));
    }

  public function produk()
    {
    	$produk = Kategori::all();
    	return view('frontend.tasransel', compact('produk'));
    }
    
     public function kantor()
    {
        $kantor = Kategori::all();
        return view('frontend.taskantor', compact('kantor'));
    }

    public function selempang()
    {
        $selempang = Kategori::all();
        return view('frontend.tasselempang', compact('selempang'));
    }

      public function kulit()
    {
        $kulit = Kategori::all();
        return view('frontend.taskulit', compact('kulit'));
    }

       public function goodie()
    {
        $goodie = Kategori::all();
        return view('frontend.tasgoodie', compact('goodie'));
    }

     public function produksi()
    {
        $produksi = Kategori::all();
        return view('frontend.produksi', compact('produksi'));
    }
    public function galeri()
    {
        $galeri = Kategori::all();
        return view('frontend.galeri', compact('galeri'));
    }
     public function pemesanan()
    {
        $pemesanan = Kategori::all();
        return view('frontend.pemesanan', compact('pemesanan'));
    }
     public function testimoni()
    {
        $testimoni = Kategori::all();
        return view('frontend.testimoni', compact('testimoni'));
    }
     public function produks()
    {
        $produks = Kategori::all();
        return view('frontend.produks', compact('produks'));
    }
    public function barang()
    {
         $kategorip = Barang::all();
         return view('frontend.produks', compact('kategorip'));
    }
     public function filter_produk($id)
    {
         $kat = Barang::where('kategori_id','=',$id)->get();
         return view('frontend.produks', compact('kat'));
    }
     
    public function contactUS ()
    {
        $contactUS = ContactUS::all();
        return view('frontend.contactUS', compact('contactUS'));
    }

    public function postcontact(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|',
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage'=> $request->message,
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('mfaisalrifky@gmail.com');
            $message->subject($data['subject']);
        }); 

        return redirect('/contact-us')->with('flash_message', 'Terima Kasih, Pesan Anda Terkirim !!');
        
    }
     public function coba ()
    {
        $coba = ContactUS::all();
        return view('frontend.coba', compact('coba'));
    }

}
