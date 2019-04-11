@extends('welcome')
@section('konten')

 <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        
        <div class="elementor-icon-wrapper">
      <a class="elementor-icon" href="#">
        <i class="fa fa-angle-double-down"></i>
      </a>
    </div>
      </div>
    </section>
@php
    $galeri = App\Galeri::all();
    @endphp
    <div class="gallery_area clearfix">
        <div class="container-fluid clearfix">
            <div class="gallery_menu">
                <div class="portfolio-menu">
                    <button class="active btn" type="button" data-filter="*">Gallery</button>
                </div>
            </div>
            @foreach($galeri as $data)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                    <img src="{{asset('/assets/admin/dist/img/'.$data->foto.'')}}" width="300" height="300">
                    <div class="hover_overlay">
                        <a class="gallery_img" href="{{asset('/assets/admin/dist/img/'.$data->foto.'')}}"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 text-center mt-70">
                    <a href="#" class="btn studio-btn"><img src="{{ asset ('/assets/frontend/img/core-img/logo-icon.png')}}" alt=""> Load More</a>
                </div>
            </div>
        </div>
    </div>