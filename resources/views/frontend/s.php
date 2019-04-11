@section('konten')

<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Dry Collection</title>
  <meta charset="UTF-8">
  <meta name="description" content=" Divisima | eCommerce Template">
  <meta name="keywords" content="divisima, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="{{ asset('divisima/img/favicon.ico')}}" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="ht{{ asset('divisima/tps://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i')}}" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('divisima/css/bootstrap.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/font-awesome.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/flaticon.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/slicknav.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/jquery-ui.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/owl.carousel.min.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/animate.css')}}"/>
  <link rel="stylesheet" href="{{ asset('divisima/css/style.css')}}"/>


  <!--[if lt IE 9]>
      <script src="{{ asset('divisima/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{ asset('divisima/https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
  <![endif]-->

</head>
<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a href="./index.html" class="site-logo">
            <h2>Dry Collection</h2>
                
            </a>
          </div>
              <div class="up-item">
                
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
          <li><a href="Home">Home</a></li>
          <li><a href="produksi">Produksi</a></li>
          <li><a href="testimoni">Testimoni
          </a></li>
          <li><a href="produk">Produk</a>
           
          </li>
          <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="./product.html">Product Page</a></li>
              <li><a href="./category.html">Category Page</a></li>
              <li><a href="./cart.html">Cart Page</a></li>
              <li><a href="./checkout.html">Checkout Page</a></li>
              <li><a href="./contact.html">Contact Page</a></li>
            </ul>
          </li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Header section end -->



  <!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item set-bg" data-setbg="{{ asset('divisima/img/bg.jpg')}}">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <h2>Tas Selempang</h2>
              <p>Kami merupakan pabrik tas produsen tas seperti tas seminar, tas anak, tas sekolah, tas selempang, tas pelatihan, tas umroh & haji, tas kulit asli, tas spunbond, dan jenis tas lainnya.</p>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="#" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
          <div class="offer-card text-white">
            <span>from</span>
            <h2>$29</h2
            <p>SHOP NOW</p>
          </div>
        </div>
      </div>
      <div class="hs-item set-bg" data-setbg="{{ asset('divisima/img/bg-2.jpg')}}">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7 text-white">
              <span>New Arrivals</span>
              <h2>denim jackets</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              <a href="#" class="site-btn sb-line">DISCOVER</a>
              <a href="#" class="site-btn sb-white">ADD TO CART</a>
            </div>
          </div>
          <div class="offer-card text-white">
            <span>from</span>
            <h2>$29</h2>
            <p>SHOP NOW</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="slide-num-holder" id="snh-1"></div>
    </div>
  </section>
  <!-- Hero section end -->



  <!-- Features section -->
  <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>KENAPA HARUS PILIH KAMI ?</h3>
          <p>Kami merupakan produsen tas dengan banyak model seperti tas seminar, tas ransel, tas anak, tas sekolah, tas travel, tas spunbond, tas koper, dan jenis tas lainnya.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-heart-outline"></i></div>
            <h4 class="title"><a href="">BELANJA AMAN & NYAMAN</a></h4>
            <p class="description">Proses pemesanan tas dari kami sangat nyaman dan aman karena kami menyediakan metode pembayaran yang banyak pilihan dan kami menerima COD atau ketemu langsung dengan kami.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">PESAN TAS SESUAI KEBUTUHAN</a></h4>
            <p class="description">Kami memproduksi berbagai macam tas sesuai dengan kebutuhan yang anda butuhkan, kami juga menerima custom untuk kebutuhan seperti untuk acara seminar, pelatihan diklat, pelatihan perusahaan, event promosi, dan lainnya.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">TENAGA KERJA PROFESIONAL</a></h4>
            <p class="description">Kami hanya memproduksi tas yang dikerjakan oleh para profesional yang telah berpengalaman bertahun-tahun dalam memproduksi berbagai macam jenis tas sehingga menghasilkan kualitas tas yang terbaik sesuai dengan kebutuhan yang Anda inginkan.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">KAPASITAS PRODUKSI</a></h4>
            <p class="description">Kami siap memproduksi tas baik skala kecil maupun skala besar dengan berbagai macam jenis dan model tas dari yang desain mudah sampai dengan rumit sekalipun yang sesuai dengan anggaran yang diberikan dalam setiap produk tasnya.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">PENGIRIMAN BARANG</a></h4>
            <p class="description">Banyak sekali jasa pengiriman/ jasa expedisi untuk mengirimkan tas yang telah dipesan untuk di kirim ke alamat Anda, kami telah bekerjasama dengan banyak jasa pengiriman terpercaya baik untuk pengiriman daratan, lautan maupun pengiriman melalui jalur udara.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
            <h4 class="title"><a href="">GARANSI PRODUK</a></h4>
            <p class="description">Setiap produk tas yang telah kami produksi melalui proses pembuatan yang sangat teliti, sehingga kami hanya menghasilkan produksi tas kami yang berkualitas yang layak untuk dipakai sesuati dengan keinginan pemesanan yang sudah disepakati.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

  <!-- Features section end -->


  <!-- letest product section -->
  <section class="top-letest-product-section">
    <div class="container">
      <div class="section-title">
        <h2>LATEST PRODUCTS</h2>
      </div>
      <div class="product-slider owl-carousel">
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{ asset('divisima/img/product/1.jpg')}}" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
        <div class="product-item">
          <div class="pi-pic">
            <div class="tag-new">New</div>
            <img src="{{ asset('divisima/img/product/9.jpg')}}" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Black </p>
          </div>
        </div>
        <div class="product-item">
          <div class="pi-pic">
            <img src="{{ asset('divisima/img/product/11.jpg')}}" alt="">
            <div class="pi-links">
              <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
              <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
            </div>
          </div>
          <div class="pi-text">
            <h6>$35,00</h6>
            <p>Flamboyant Pink Top </p>
          </div>
        </div>
        <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/img/product/4.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/img/product/6.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- letest product section end -->



  <!-- Product filter section -->
  <section class="product-filter-section">
    <div class="container">
      <div class="section-title">
        <h2>BROWSE TOP SELLING PRODUCTS</h2>
      </div>
      <ul class="product-filter-menu">
        <li><a href="#">TOPS</a></li>
        <li><a href="#">JUMPSUITS</a></li>
        <li><a href="#">LINGERIE</a></li>
        <li><a href="#">JEANS</a></li>
        <li><a href="#">DRESSES</a></li>
        <li><a href="#">COATS</a></li>
        <li><a href="#">JUMPERS</a></li>
        <li><a href="#">LEGGINGS</a></li>
      </ul>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/./img/product/5.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <div class="tag-sale">ON SALE</div>
              <img src="{{ asset('divisima/./img/product/6.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Black and White Stripes Dress</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/./img/product/7.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/./img/product/8.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/./img/product/9.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/./img/product/10.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Black and White Stripes Dress</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/img/product/11.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="product-item">
            <div class="pi-pic">
              <img src="{{ asset('divisima/img/product/12.jpg')}}" alt="">
              <div class="pi-links">
                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$35,00</h6>
              <p>Flamboyant Pink Top </p>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center pt-5">
        <button class="site-btn sb-line sb-dark">LOAD MORE</button>
      </div>
    </div>
  </section>
  <!-- Product filter section end -->


  <!-- Banner section -->
  <section class="banner-section">
    <div class="container">
      <div class="banner set-bg" data-setbg="{{ asset('divisima/img/banner-bg.jpg')}}">
        <div class="tag-new">NEW</div>
        <span>New Arrivals</span>
        <h2>STRIPED SHIRTS</h2>
        <a href="#" class="site-btn">SHOP NOW</a>
      </div>
    </div>
  </section>
  <!-- Banner section end  -->


  <!-- Footer section -->
  <section class="footer-section">
    <div class="container">
      <div class="footer-logo text-center">
        <a href="index.html"><img src="{{ asset('divisima/img/logo-light.png')}}" alt=""></a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>About</h2>
            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
            <img src="{{ asset('divisima/img/cards.png')}}" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Track Orders</a></li>
              <li><a href="">Returns</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">Shipping</a></li>
              <li><a href="">Blog</a></li>
            </ul>
            <ul>
              <li><a href="">Partners</a></li>
              <li><a href="">Bloggers</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">Terms of Use</a></li>
              <li><a href="">Press</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <div class="fw-latest-post-widget">
              <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="{{ asset('divisima/img/blog-thumbs/1.jpg')}}"></div>
                <div class="lp-content">
                  <h6>what shoes to wear</h6>
                  <span>Oct 21, 2018</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
              <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="{{ asset('divisima/img/blog-thumbs/2.jpg')}}"></div>
                <div class="lp-content">
                  <h6>trends this year</h6>
                  <span>Oct 21, 2018</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
   

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </div>
    </div>
  </section>
  <!-- Footer section end -->



  <!--====== Javascripts & Jquery ======-->
  <script src="{{ asset('divisima/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('divisima/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('divisima/js/jquery.slicknav.min.js')}}"></script>
  <script src="{{ asset('divisima/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('divisima/js/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('divisima/js/jquery.zoom.min.js')}}"></script>
  <script src="{{ asset('divisima/js/jquery-ui.min.js')}}"></script>
  <script src="{{ asset('divisima/js/main.js')}}"></script>

  </body>
</html>