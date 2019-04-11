@extends('welcome')
@section('konten')


@php
 $brg = App\Barang::All();
 $kat = App\Kategori::all();
@endphp

 <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        
        <div class="elementor-icon-wrapper">
      <a class="elementor-icon" href="#">
        <i class="fa fa-angle-double-down"></i>
      </a>
    </div>
      </div>
    </section>
 
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Kategori</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*">All</li>
              @foreach($kat  as $data)
              <li data-filter=".galeri{{$data->id}}">{{ $data->nama_kategori }}</li>
              @endforeach
            </ul>
          </div>
        </div>
      
        <div class="row portfolio-container">
              @foreach($brg as $data)
          <div class="col-lg-4 col-md-6 portfolio-item galeri{{$data->Kategori->id}} wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('/assets/admin/dist/img/'.$data->gambar.'')}}" class="img-fluid" style="width: 350px;height: 290px" alt="">
                <center><a href="{{asset('/assets/admin/dist/img/'.$data->gambar.'')}}"  data-lightbox="portfolio" data-title="" class="link-preview" title="Preview"><i class="ion ion-eye" ></i></a></center>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">{{ $data->nama_barang }}</a></h4>
                <h4><a href="#">Rp.{{ $data->harga }}</a></h4>
                
                
                
              </div>
            </div>
          </div>
@endforeach
        </div>
      </div>
    </section><!-- #portfolio -->
