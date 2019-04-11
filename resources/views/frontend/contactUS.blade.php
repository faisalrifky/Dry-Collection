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

<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Hubungi Kami</h3>
            <p>Untuk info lebih lanjut hubungi kami</p>
           <center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.299718749952!2d107.58050071431774!3d-6.973921970224765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e928e386ba75%3A0x23fd540a1e647f06!2sJl.+Sukamenak+Gg.+Sudirja%2C+Sukamenak%2C+Margahayu%2C+Bandung%2C+Jawa+Barat+40227!5e0!3m2!1sen!2sid!4v1540946797968" width="1100" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</center>

        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Jln.Sampora Gg.Pak adin no.331</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+88222263295">+88222263295</a></p>
            </div>
          </div>

          </div>

        <div class="form">
            @if(Session::has('flash_message'))
                <div class="alert alert-success">{{Session::get('flash_message')}}</div>
            @endif
         

      </div>
    </section>
    </main>
    @endsection

