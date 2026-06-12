
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBkuu - Keluarga Berencana</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #FF6B9D;
            --primary-dark: #E91E63;
            --secondary: #00BCD4;
            --accent: #FF4081;
            --dark: #2D3436;
            --light: #FFF0F5;
        }

        body {
            background-color: #FAFAFA;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(255, 107, 157, 0.3);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
        }

        .navbar-brand i {
            color: #FFD700;
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: #FFD700 !important;
            transform: translateY(-2px);
        }

        .btn-nav {
            background: white;
            color: var(--primary) !important;
            border-radius: 25px;
            padding: 8px 25px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-nav:hover {
            background: #FFD700;
            color: var(--dark) !important;
            transform: scale(1.05);
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #FFF0F5 0%, #FFE4EC 50%, #FFD6E7 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 70%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 107, 157, 0.1), transparent);
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.2;
        }

        .hero-title span {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #636E72;
            margin: 20px 0 30px;
            line-height: 1.8;
        }

        .btn-hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(255, 107, 157, 0.4);
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 107, 157, 0.5);
            color: white;
        }

        .hero-image {
            max-width: 100%;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        /* Section Styles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title span {
            color: var(--primary);
        }

        .section-subtitle {
            color: #636E72;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 50px;
        }

        /* Cards */
        .kb-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s;
            height: 100%;
            border: none;
        }

        .kb-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(255, 107, 157, 0.2);
        }

        .kb-card-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .kb-card-body {
            padding: 25px;
        }

        .kb-card-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .kb-card-text {
            color: #636E72;
            font-size: 0.95rem;
            line-height: 1.7;
        }

        .kb-card-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
        }

        .cta-text {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-cta {
            background: white;
            color: var(--primary);
            border-radius: 30px;
            padding: 15px 50px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-cta:hover {
            background: #FFD700;
            color: var(--dark);
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 40px 0 20px;
        }

        .footer-text {
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        /* Feature Icons */
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 767px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .hero-section {
                padding-top: 100px;
                min-height: auto;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <i class="bi bi-heart-pulse-fill me-2"></i>KBKUU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pelajari">Pelajari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-nav ms-3" href="{{route('usage-category')}}">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Mulai
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title">
                        KBKUU: <span>Partner Kesehatan Keluarga</span> Terpercaya Anda
                    </h1>
                    <p class="hero-subtitle">
                        Aplikasi inovatif untuk mendukung kesehatan keluarga Anda. Dirancang dengan antarmuka sederhana dan fitur lengkap untuk mempermudah pengelolaan kesehatan kontrasepsi.
                    </p>
                    <a href="{{route('usage-category')}}" class="btn btn-hero">
                        <i class="bi bi-arrow-right-circle me-2"></i>Mulai Sekarang
                    </a>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/bidan.png') }}" alt="KB Illustration" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- KB Methods Section -->
    <section class="services section py-5" id="pelajari">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Kenali <span>Jenis-Jenis KB</span> untuk Keluarga Anda</h2>
                <p class="section-subtitle">
                    Temukan berbagai metode Keluarga Berencana (KB) yang sesuai dengan kebutuhan Anda, mulai dari KB alami hingga metode modern.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/PIL.jpg')}}" alt="Pil KB" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-capsule"></i>
                            </div>
                            <h5 class="kb-card-title">Pil KB</h5>
                            <p class="kb-card-text">
                                Pil Kontrasepsi Berbasis Hormon yang dikonsumsi setiap hari untuk mencegah kehamilan dengan efektif.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/SUNTIK.jpg')}}" alt="Suntik KB" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-bandaid"></i>
                            </div>
                            <h5 class="kb-card-title">Suntik KB</h5>
                            <p class="kb-card-text">
                                Metode kontrasepsi hormonal melalui suntikan untuk mencegah kehamilan, tersedia dalam pilihan 1, 2, dan 3 bulan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/implant.jpg.crdownload.jpeg')}}" alt="Implan KB" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h5 class="kb-card-title">Implan/Susuk</h5>
                            <p class="kb-card-text">
                                KB Implan adalah kontrasepsi berbasis hormon yang ditanamkan di bawah kulit lengan atas.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/IUD.jpg')}}" alt="IUD/Spiral" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-circle"></i>
                            </div>
                            <h5 class="kb-card-title">IUD/Spiral</h5>
                            <p class="kb-card-text">
                                Alat kontrasepsi dalam rahim dengan masa pakai 3 hingga 10 tahun, tergantung jenisnya.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/kondom.jpeg')}}" alt="Kondom" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h5 class="kb-card-title">Kondom</h5>
                            <p class="kb-card-text">
                                Alat kontrasepsi untuk mencegah kehamilan dan penyebaran penyakit menular seksual (PMS).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/kalender-kb.png')}}" alt="KB Kalender" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-calendar3"></i>
                            </div>
                            <h5 class="kb-card-title">KB Kalender</h5>
                            <p class="kb-card-text">
                                Metode kontrasepsi alami yang memprediksi masa subur berdasarkan siklus menstruasi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="kb-card">
                        <img src="{{asset('assets/icon-rekomendasi/steril.png')}}" alt="Steril" class="kb-card-img">
                        <div class="kb-card-body">
                            <div class="kb-card-icon">
                                <i class="bi bi-x-circle"></i>
                            </div>
                            <h5 class="kb-card-title">Steril / MOW</h5>
                            <p class="kb-card-text">
                                Prosedur kontrasepsi permanen untuk mencegah kehamilan secara total.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="800">
                <a href="{{route('usage-category')}}" class="btn btn-hero">
                    <i class="bi bi-arrow-right-circle me-2"></i>Mulai Konsultasi
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="cta-title" data-aos="fade-up">Siap Memulai Perjalanan KB Anda?</h2>
            <p class="cta-text" data-aos="fade-up" data-aos-delay="100">
                Konsultasikan kebutuhan kontrasepsi Anda dengan bidan berpengalaman sekarang.
            </p>
            <a href="{{route('usage-category')}}" class="btn btn-cta" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-chat-dots me-2"></i>Mulai Sekarang
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="footer-text mb-0">
                        <i class="bi bi-heart-pulse-fill me-1"></i>
                        By Nesya Polkesbaya | &copy; 2025 KBKUU. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-out'
        });
    </script>
</body>

</html>
