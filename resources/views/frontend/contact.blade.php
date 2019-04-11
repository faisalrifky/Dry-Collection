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
 





 <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Kontak Kami</h3>
          <p>Untuk info lebih lanjut hubungi kami</p>
        </div>

        <div class="row contact-info">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.299718749952!2d107.58050071431774!3d-6.973921970224765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e928e386ba75%3A0x23fd540a1e647f06!2sJl.+Sukamenak+Gg.+Sudirja%2C+Sukamenak%2C+Margahayu%2C+Bandung%2C+Jawa+Barat+40227!5e0!3m2!1sen!2sid!4v1539856920191" width="1800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
            <address>Jln. Sukamenak, Gg. H. Supartdi | Rt 07/08 Kec. Margahayu, Bandung</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+88222263295">088222263295</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section>
    </main>
   