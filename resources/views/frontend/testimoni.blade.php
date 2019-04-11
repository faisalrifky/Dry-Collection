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
 $testimoni = App\Testimoni::All();
@endphp

 <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Testimoni</h3>
        </header>


        
        <div class="row portfolio-container">
        @foreach($testimoni as $data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{asset('/assets/admin/dist/img/'.$data->foto.'')}}" class="img-fluid" alt="">
               <center><a href="{{asset('/assets/admin/dist/img/'.$data->foto.'')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a></center>
               </figure>
            
              
                          </div></div>@endforeach</div></div></section>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
