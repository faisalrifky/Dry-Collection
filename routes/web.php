<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   

Route::get('/',function(){
	return view('frontend.home');
});

Auth::routes();

Route::get('/cek',function(){
	return view('layouts.admin');
});
Route::get('admin', function(){
	return view('admin.index');
});

Auth::routes();

Route::get('/home', 'FrontendController@home');
Route::get('/register', function(){
	return redirect('/home');
});
Route::get('/produk', 'FrontendController@produk');
Route::get('/kantor', 'FrontendController@kantor');
Route::get('/selempang', 'FrontendController@selempang');
Route::get('/kulit', 'FrontendController@kulit');
Route::get('/goodie', 'FrontendController@goodie');
Route::get('/produksi', 'FrontendController@produksi');
Route::get('/galeri', 'FrontendController@galeri');
Route::get('/pemesanan', 'FrontendController@pemesanan');
Route::get('/testimoni', 'FrontendController@testimoni');
Route::get('/produks', 'FrontendController@produks');
Route::get('/contact-us', 'FrontendController@contactUS');
Route::post('/contact-us', 'FrontendController@postcontact');

Route::get('/coba', 'FrontendController@coba');
Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin|perusahaan|pelamar']], function (){
	//isi route disini

Route::resource('user','UserController');
Route::resource('kategori','KategoriController');
//Route::resource('member','MemberController');
Route::resource('barang','BarangController');
Route::resource('tentang','TentangController');
Route::resource('kategoriartikel','KategoriArtikelController');
Route::resource('artikel','ArtikelController');
//Route::resource('lamaran','LamaranController');
Route::resource('galeri','GaleriController');
Route::resource('testimoni','TestimoniController');
Route::resource('produksi','ProduksiController');
Route::resource('artikel','ArtikelController');
Route::post('artikel/{publish}', 'ArtikelController@Publish')->name('artikel.publish');
Route::resource('file','FileController');



});






