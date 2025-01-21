
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

        .custom-gradient-button:hover {
        background: linear-gradient(to right, #0077b6, #00b4d8); /* Hover effect for the gradient */
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
</div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="section-heading wow fadeInDown">
                <h4>KATEGORI PENGGUNAAN <em>KONTRASEPSI</em></h4>
                <img src="{{asset('custom/assets/images/heading-line-dec.png')}}" alt="">
                {{-- <p>Temukan berbagai metode Keluarga Berencana (KB) yang sesuai dengan kebutuhan Anda, mulai dari KB alami hingga metode modern. Kami hadir untuk memberikan informasi terpercaya dan memandu Anda dalam memilih solusi terbaik untuk perencanaan keluarga yang sehat dan bahagia.</p> --}}
            </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-4 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Menunda Kehamilan</h4>
            <p>
                Wanita Usia Subur (WUS) yang sudah menikah dengan usia kurang dari atau (20 tahun dianjurkan untuk menunda kehamilan)
            </p>
            <div class="text-button">
                <a href="/homepage">Next <i class="fa fa-arrow-right"></i></a>
              </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="service-item first-service">
              <div class="icon"></div>
              <h4>Menjarangkan Kehamilan</h4>
                <p>
                    Wanita usia subur (WUS) yang sudah menikah pada rentang usia 20-35 tahun, sudah memiliki dua anak, dengan jarak kelahiran antara anak pertama dan kedua adalah 3-4 tahun.
                </p>
              <div class="text-button">
                  <a href="/homepage">Next <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="service-item first-service">
              <div class="icon"></div>
              <h4>Mengakhiri Kehamilan</h4>
              <p>
                Wanita usia subur (WUS) yang berusia lebih dari 35 tahun memiliki risiko tinggi jika hamil, yang dapat menimbulkan bahaya bagi kesehatan ibu maupun calon bayi.
              </p>
              <div class="text-button">
                <a href="#" data-bs-toggle="modal" data-bs-target="#kehamilanModal">Next <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="kehamilanModal" tabindex="-1" aria-labelledby="kehamilanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kehamilanModalLabel">Informasi: Mengakhiri Kehamilan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>
            Mengakhiri kehamilan pada wanita usia subur (WUS) yang berusia lebih dari 35 tahun perlu dipertimbangkan secara medis, karena kehamilan pada usia tersebut memiliki risiko tinggi. Konsultasi dengan dokter atau tenaga medis sangat dianjurkan untuk memahami risiko dan alternatif yang aman.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  </div>



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
