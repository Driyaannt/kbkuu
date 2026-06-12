@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #FF6B9D;
        --primary-dark: #E91E63;
        --secondary: #00BCD4;
        --accent: #FF4081;
        --dark: #2D3436;
        --light: #FFF0F5;
    }

    body {
        background: linear-gradient(135deg, #FFF0F5 0%, #FFE4EC 50%, #FFD6E7 100%);
        min-height: 100vh;
    }

    .page-wrapper {
        background: transparent;
    }

    .body-wrapper {
        padding-top: 80px;
        min-height: 100vh;
    }

    /* Header Card */
    .header-card {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        border-radius: 20px;
        padding: 40px;
        color: white;
        box-shadow: 0 20px 60px rgba(255, 107, 157, 0.4);
        position: relative;
        overflow: hidden;
        margin-bottom: 40px;
    }

    .header-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 60%;
        height: 200%;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
    }

    @keyframes pulse {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.1); }
    }

    .header-card h4 {
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    .header-card p {
        font-size: 1rem;
        opacity: 0.9;
        margin-bottom: 0;
    }

    .header-card img {
        max-width: 180px;
        animation: float 3s ease-in-out infinite;
        filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
    }

    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }

    /* Form Card */
    .form-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }

    .form-card h5 {
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 30px;
        font-size: 1.5rem;
        position: relative;
        display: inline-block;
    }

    .form-card h5::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        border-radius: 2px;
    }

    .form-floating {
        margin-bottom: 20px;
    }

    .form-control {
        border: 2px solid #E8E8E8;
        border-radius: 15px;
        padding: 15px 20px;
        font-size: 1rem;
        transition: all 0.3s;
        height: calc(3.5rem + 2px);
    }

    .form-control:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(255, 107, 157, 0.25);
    }

    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        color: var(--primary);
        font-weight: 500;
    }

    .form-floating > label {
        padding: 1.2rem 1rem;
    }

    .invalid-feedback {
        color: var(--accent);
        font-size: 0.875rem;
        margin-top: 5px;
    }

    /* Submit Button */
    .btn-submit {
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        color: white;
        border: none;
        border-radius: 30px;
        padding: 15px 50px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: all 0.3s;
        box-shadow: 0 10px 30px rgba(255, 107, 157, 0.4);
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .btn-submit:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(255, 107, 157, 0.5);
        color: white;
        background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
    }

    .btn-submit i {
        font-size: 1.3rem;
    }

    /* Steps indicators */
    .step-indicators {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .step-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        border-radius: 30px;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .step-item:nth-child(1) {
        background: rgba(102, 126, 234, 0.1);
        color: #667eea;
    }

    .step-item:nth-child(2) {
        background: rgba(118, 75, 162, 0.1);
        color: #764ba2;
    }

    .step-item:nth-child(3) {
        background: rgba(255, 107, 157, 0.1);
        color: var(--accent);
    }

    .step-badge {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        color: white;
    }

    .step-item:nth-child(1) .step-badge { background: #667eea; }
    .step-item:nth-child(2) .step-badge { background: #764ba2; }
    .step-item:nth-child(3) .step-badge { background: var(--accent); }

    /* Responsive */
    @media (max-width: 768px) {
        .header-card {
            padding: 25px;
            text-align: center;
        }

        .header-card img {
            margin-top: 20px;
            max-width: 140px;
        }

        .form-card {
            padding: 25px;
        }
    }
</style>

<div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full">
    <div class="body-wrapper">
        <div class="container">
            <!-- Header Card -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="header-card" data-aos="fade-up">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h4><i class="bi bi-heart-pulse-fill me-2"></i>Silahkan isi Biodata Anda!</h4>
                                <p>Isikan data diri Anda dengan lengkap untuk mendapatkan rekomendasi metode KB yang tepat.</p>

                                <div class="step-indicators mt-4">
                                    <div class="step-item">
                                        <span class="step-badge">1</span>
                                        Dapatkan Informasi yang Tepat
                                    </div>
                                    <div class="step-item">
                                        <span class="step-badge">2</span>
                                        Pilih Metode KB
                                    </div>
                                    <div class="step-item">
                                        <span class="step-badge">3</span>
                                        Mengatasi Keluhan
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center">
                                <img src="{{ asset('assets/images/bidan.png') }}" alt="Bidan" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Card -->
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="form-card" data-aos="fade-up" data-aos-delay="100">
                        <h5><i class="bi bi-person-lines-fill me-2 text-primary"></i>Ceritakan tentang diri anda!</h5>

                        <form action="{{ route('save-form-data') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('nama_akseptor') is-invalid @enderror"
                                               name="nama_akseptor" value="{{ old('nama_akseptor') }}" placeholder="Nama Akseptor" />
                                        <label for="nama_akseptor"><i class="bi bi-person me-2"></i>Nama Akseptor</label>
                                        @error('nama_akseptor')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('nama_suami') is-invalid @enderror"
                                               name="nama_suami" value="{{ old('nama_suami') }}" placeholder="Nama Suami" />
                                        <label for="nama_suami"><i class="bi bi-person-heart me-2"></i>Nama Suami</label>
                                        @error('nama_suami')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                                               name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir') }}" placeholder="Pendidikan Terakhir" />
                                        <label for="pendidikan_terakhir"><i class="bi bi-mortarboard me-2"></i>Pendidikan Terakhir</label>
                                        @error('pendidikan_terakhir')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('tujuan_kb') is-invalid @enderror"
                                               name="tujuan_kb" value="{{ old('tujuan_kb') }}" placeholder="Tujuan Mengikuti Program KB" />
                                        <label for="tujuan_kb"><i class="bi bi-bullseye me-2"></i>Tujuan KB</label>
                                        @error('tujuan_kb')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control @error('no_hp') is-invalid @enderror"
                                               name="no_hp" value="{{ old('no_hp') }}" placeholder="No Hp" />
                                        <label for="no_hp"><i class="bi bi-phone me-2"></i>No Hp</label>
                                        @error('no_hp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                               name="alamat" value="{{ old('alamat') }}" placeholder="Alamat" />
                                        <label for="alamat"><i class="bi bi-house me-2"></i>Alamat</label>
                                        @error('alamat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn-submit">
                                        <i class="bi bi-send"></i>
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add AOS animation library if not already included -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out'
    });
</script>

@endsection