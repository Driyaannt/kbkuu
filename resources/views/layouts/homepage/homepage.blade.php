
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>KBkuu</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('custom/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('custom/assets/css/templatemo-chain-app-dev.css') }}">
    <link rel="stylesheet" href="{{asset('custom/assets/css/animated.css')}}">
    <link rel="stylesheet" href="{{asset('custom/assets/css/owl.css')}}">
    <style>
       .custom-gradient-button {
        display: inline-block;
        padding: 10px 20px;
        background: linear-gradient(to right, #00b4d8, #0077b6); /* Gradient background */
        color: white;
        font-size: 16px;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
        transition: background 0.3s ease;
        border-radius: 30px !important;
        }
        .gradien-button{
            z-index: 10;
            position: relative;
        }

        .custom-gradient-button:hover {
        background: linear-gradient(to right, #0077b6, #00b4d8); /* Hover effect for the gradient */
        }
        .service-image {
            max-width: 100%;
            max-height: 250px; /* Sesuaikan dengan kebutuhan */
            object-fit: cover; /* Agar proporsi gambar tetap terjaga */
        }

    </style>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{route('usage-category')}}" class="logo">
              <img src="{{ asset('assets/icons/Kbkuu.png') }}" alt="Chain App Dev" style="width: 200px !important;">
            </a>
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Pelajari</a></li>
              {{-- <li class="scroll-to-section"><a href="{{route('book-abpk')}}">Book</a></li> --}}
              {{-- <li><div class="gradient-button"><a id="modal_trigger" href="#modal"><i class="fa fa-sign-in-alt"></i> Mulai</a></div></li> --}}
              <li>
                <div class="gradien-button text-center">
                    <a href="{{route('usage-category')}}" class="custom-gradient-button">
                      <i class="fa fa-sign-in-alt"></i> Mulai
                    </a>
                </div>
            </li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>KBKUU: Your Trusted Family Health Partner</h2>
                    <p>KBKUU adalah aplikasi inovatif untuk mendukung kesehatan keluarga Anda, dirancang dengan antarmuka sederhana dan fitur lengkap untuk mempermudah pengelolaan kesehatan sehari-hari.</p>
                </div>
                  <div class="col-lg-12">
                    <div class="white-button scroll-to-section">
                      <a href="#services">Lebih lengkap! <i class="fab fa-google-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{asset('custom/assets/images/slider-dec.png')}}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading wow fadeInDown">
                    <h4>Kenali <em>Jenis-Jenis KB</em> untuk Keluarga Anda</h4>
                    <img src="{{asset('custom/assets/images/heading-line-dec.png')}}" alt="">
                    <p>Temukan berbagai metode Keluarga Berencana (KB) yang sesuai dengan kebutuhan Anda, mulai dari KB alami hingga metode modern. Kami hadir untuk memberikan informasi terpercaya dan memandu Anda dalam memilih solusi terbaik untuk perencanaan keluarga yang sehat dan bahagia.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="service-item first-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/PIL.jpg')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>Pil KB</h4>
                    <p>
                        Pil Kontrasepsi Berbasis Hormon (Pil KB) adalah obat yang digunakan untuk mencegah kehamilan dikonsumsi setiap hari.
                    </p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                <div class="service-item second-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/SUNTIK.jpg')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>Suntik</h4>
                    <p>
                        Suntik KB adalah metode kontrasepsi hormonal melalui suntikan untuk mencegah kehamilan, tersedia dalam pilihan 1 bulan, 2 bulan, dan 3 bulan.
                    </p>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <div class="service-item third-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/implant.jpg.crdownload.jpeg')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>Implan/Susuk</h4>
                    <p>KB Implan adalah kontrasepsi berbasis hormon yang ditanamkan di bawah kulit lengan atas untuk mencegah kehamilan.</p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="2s" data-wow-delay="2s">
                <div class="service-item fourth-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/IUD.jpg')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>IUD/Spiral</h4>
                    <p>
                        Spiral (IUD) adalah alat kontrasepsi dalam rahim dengan masa pakai 3 hingga 10 tahun, tergantung jenisnya.
                    </p>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="2s" data-wow-delay="2.5s">
                <div class="service-item fifth-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/kondom.jpeg')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>Kondom</h4>
                    <p>
                        Kondom adalah alat kontrasepsi terbuat dari silikon yang digunakan untuk mencegah kehamilan dan penyebaran penyakit menular seksual (PMS).
                    </p>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="2.5s" data-wow-delay="3s">
                <div class="service-item sixth-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/kalender-kb.png')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>KB Kalender</h4>
                    <p>
                        (Metode Kalender) adalah metode kontrasepsi alami yang memprediksi masa subur berdasarkan siklus menstruasi.
                    </p>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-lg-6 mb-4 wow fadeInDown" data-wow-duration="3s" data-wow-delay="3.5s">
                <div class="service-item seventh-service">
                    <div class="mb-2">
                        <img src="{{asset('assets/icon-rekomendasi/steril.png')}}" alt="" class="img-fluid service-image">
                    </div>
                    <h4>Steril / MOW</h4>
                    <p>
                        KB Steril (Sterilisasi) adalah prosedur kontrasepsi permanen yang mencegah kehamilan dengan memotong atau mengikat saluran sperma (vas deferens) pada pria atau saluran telur (tuba fallopi) pada wanita.
                    </p>
                </div>
            </div>
            <!-- Button Start -->
            <div class="col-lg-12 mt-4">
                <div class="gradien-button text-center wow fadeInDown" data-wow-delay="4s" data-wow-duration="4s">
                    <a href="{{route('usage-category')}}" class="custom-gradient-button">
                        <i class="fa fa-sign-in-alt"></i> Mulai
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



  <footer id="newsletter">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-text">
            <p class="text-dark text-bold">By Nesya Windra Polkesbaya © 2025. All Rights Reserved.
          {{-- <br>Design: <a href="https://templatemo.com/" target="_blank" title="css templates">TemplateMo</a></p> --}}
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="{{asset('custom/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('custom/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('custom/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('custom/assets/js/animation.js')}}"></script>
  <script src="{{asset('custom/assets/js/imagesloaded.js')}}"></script>
  <script src="{{asset('custom/assets/js/popup.js')}}"></script>
  <script src="{{asset('custom/assets/js/custom.js')}}"></script>
</body>
</html>
