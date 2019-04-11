
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DRY COLLECTION | 083820451926</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('BizPage/img/tas2.png') }}" rel="icon">
  <link href="img/tas2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('BizPage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('BizPage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('BizPage/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('BizPage/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
   @include('partial.header')
  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
 @yield('konten')

  <!--==========================
    Footer
  ============================-->
  @include('partial.footer')
  <!-- #footer -->
 <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        
                    @endauth
                </div>
            @endif

          

               
            </div>
        </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('BizPage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('BizPage/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('BizPage/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('BizPage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('BizPage/js/main.js') }}"></script>

</body>
</html>
