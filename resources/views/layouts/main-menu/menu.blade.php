@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary: #FF6B9D;
        --primary-dark: #E91E63;
        --accent: #FF4081;
        --dark: #2D3436;
    }

    /* Header */
    .menu-header {
        background: linear-gradient(135deg, #FF6B9D 0%, #FF4081 100%);
        border-radius: 20px;
        padding: 30px;
        color: white;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(255, 107, 157, 0.4);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .menu-header h3 {
        font-weight: 700;
        font-size: 1.5rem;
        margin: 0;
    }

    .btn-back {
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .btn-back:hover {
        background: white;
        color: #FF6B9D;
        transform: translateX(-5px);
    }

    /* Menu Cards */
    .menu-card {
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.4s;
        text-decoration: none;
        height: 100%;
        position: relative;
        border: none;
        min-height: 140px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .menu-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.25);
    }

    .menu-card-body {
        padding: 25px;
        display: flex;
        align-items: center;
    }

    .menu-card-icon {
        width: 80px;
        height: 80px;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        flex-shrink: 0;
        background: rgba(255, 255, 255, 0.3);
    }

    .menu-card-icon img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    /* Card Colors */
    .menu-card.green {
        background: linear-gradient(135deg, #00C853 0%, #00E676 100%);
    }

    .menu-card.orange {
        background: linear-gradient(135deg, #FF9800 0%, #FFB74D 100%);
    }

    .menu-card.blue {
        background: linear-gradient(135deg, #2196F3 0%, #64B5F6 100%);
    }

    .menu-card.cyan {
        background: linear-gradient(135deg, #00BCD4 0%, #4DD0E1 100%);
    }

    .menu-card-content {
        flex-grow: 1;
    }

    .menu-card-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: white;
        margin-bottom: 5px;
        text-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .menu-card-desc {
        font-size: 0.85rem;
        color: rgba(255, 255, 255, 0.9);
        display: none;
    }

    .menu-card-arrow {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.3rem;
        transition: all 0.3s;
        flex-shrink: 0;
    }

    .menu-card:hover .menu-card-arrow {
        background: white;
        color: #FF6B9D;
        transform: translateX(5px);
    }

    /* Section Title */
    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2D3436;
        margin-bottom: 25px;
        text-align: center;
    }

    .section-title span {
        color: #FF6B9D;
    }

    /* Page Title */
    .page-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #636E72;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
        text-align: center;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .menu-header {
            padding: 20px;
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .menu-header h3 {
            font-size: 1.3rem;
        }

        .menu-card-body {
            padding: 20px;
            flex-direction: column;
            text-align: center;
        }

        .menu-card-icon {
            margin-right: 0;
            margin-bottom: 15px;
        }

        .menu-card-arrow {
            display: none;
        }
    }
</style>

<div class="container py-4">
    <!-- Header -->
    <div class="menu-header">
        <a href="{{ route('home') }}" class="btn-back">
            <i class="ti ti-arrow-left"></i> Kembali
        </a>
        <h3><i class="ti ti-dashboard me-2"></i>Menu Utama</h3>
    </div>

    <!-- Section Title -->
    <div class="mb-4">
        <p class="page-title">Pilih Kategori</p>
        <h2 class="section-title">Silakan Pilih <span>Menu</span> di Bawah</h2>
    </div>

    <!-- Menu Cards Row 1 -->
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <a href="{{ route('kb-method') }}" class="menu-card green card-hover">
                <div class="menu-card-body">
                    <div class="menu-card-icon">
                        <img src="{{ asset('assets/icons/1.gif') }}" alt="Klien Baru">
                    </div>
                    <div class="menu-card-content">
                        <h4 class="menu-card-title">KLIEN BARU MEMILIH METODE KB</h4>
                    </div>
                    <div class="menu-card-arrow">
                        <i class="ti ti-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('change-method') }}" class="menu-card orange card-hover">
                <div class="menu-card-body">
                    <div class="menu-card-icon">
                        <img src="{{ asset('assets/icons/2.gif') }}" alt="Ganti Metode">
                    </div>
                    <div class="menu-card-content">
                        <h4 class="menu-card-title">KLIEN GANTI CARA METODE KB</h4>
                    </div>
                    <div class="menu-card-arrow">
                        <i class="ti ti-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Menu Cards Row 2 -->
    <div class="row g-4">
        <div class="col-md-6">
            <a href="{{ route('post-abortion') }}" class="menu-card blue card-hover">
                <div class="menu-card-body">
                    <div class="menu-card-icon">
                        <img src="{{ asset('assets/icons/4.gif') }}" alt="Pasca Aborsi">
                    </div>
                    <div class="menu-card-content">
                        <h4 class="menu-card-title">KLIEN PASCA ABORSI</h4>
                    </div>
                    <div class="menu-card-arrow">
                        <i class="ti ti-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('post-partum') }}" class="menu-card cyan card-hover">
                <div class="menu-card-body">
                    <div class="menu-card-icon">
                        <img src="{{ asset('assets/icons/5.gif') }}" alt="Pasca Bersalin">
                    </div>
                    <div class="menu-card-content">
                        <h4 class="menu-card-title">KLIEN PASCA BERSALIN/MENYUSUI</h4>
                    </div>
                    <div class="menu-card-arrow">
                        <i class="ti ti-arrow-right"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.card-hover').forEach((card) => {
        card.addEventListener('click', function (e) {
            e.preventDefault();

            const cardTitleElement = this.querySelector('.menu-card-title');
            const cardName = cardTitleElement ? cardTitleElement.textContent.trim() : 'Unknown';

            console.log('Selected card:', cardName);

            fetch('{{ route("section-card") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ selected_card: cardName }),
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data.message);
                const selectedValue = this.getAttribute('href');
                if (selectedValue && selectedValue !== 'javascript:void(0)') {
                    window.location.href = selectedValue;
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    });
</script>

@endsection