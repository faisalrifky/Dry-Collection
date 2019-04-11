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


  <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Proses Produksi Tas</h3>
          <p>Proses produksi tas kami dikerjakan oleh para penjahit profesional yang telah berpengalaman, telah memproduksi banyak model tas yang sesuai dengan permintaan para pelanggan. Kami juga merupakan salah satu pabrik produsen tas murah terbesar di Indonesia.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('BizPage/img/pr1.jpg')}}" alt="" class="img-fluid">
                
              </div>
              
              <p>
                Proses Pemotongan Bahan Baku Tas</p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('BizPage/img/pr6.jpg')}}" alt="" class="img-fluid">
                
              </div>
            
              <p>
                Quality Control Sebelum Tas Dikirim.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('BizPage/img/pr1.jpg')}}" alt="" class="img-fluid">
                
              </div>
            
              <p>
                Proses Menjahit & Membordir Logo Tas.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

<!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
             </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('BizPage/img/custom.jpg')}}" alt="" class="img-fluid">
                
              </div>
              
              <p>
                Pemesanan Tas Custom . 

              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('BizPage/img/pr4.jpg')}}" alt="" class="img-fluid">
                
              </div>
            
              <p>
              Kami Telah Banyak Memproduksi Tas.
                 </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="{{asset('BizPage/img/pr3.jpg')}}" alt="" class="img-fluid">
                
              </div>
            
              <p>
               Pakai Ekspedisi Terpercaya dan Aman.
              </p>
            </div>
          
          </div>

        </div>

      </div>
    </section>
   @endsection


        
        