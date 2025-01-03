@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
          <!-- 7. Stats card -->
          <div
            class="d-flex border-bottom title-part-padding px-0 mb-3 align-items-center"
          >
          {{-- back button --}}
            <a href="{{ route('home') }}" class="me-2 btn btn-outline-secondary">
              <i class="ti ti-arrow-left"></i> Back
            </a>
            <h3 class="mb-0 fs-5">Menu Utama</h3>
          </div>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInRight"
        >
          <a
            href="{{ route('kb-method') }}"
            class="card text-bg-success text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                {{-- <i class="ti ti-basket display-6"></i> --}}
                <img src="{{ asset('assets/icons/1.gif') }}" alt="" style="max-width: 80px">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-3">
                <h4 class="card-title mb-1 text-white">
                  KLIEN BARU MEMILIH METODE KB
                </h4>
              </div>
            </div>
          </a>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInRight"
        >
          <a
            href="{{ route('change-method') }}"
            class="card text-bg-warning text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                {{-- <i class="ti ti-basket display-6"></i> --}}
                <img src="{{ asset('assets/icons/2.gif') }}" alt="" style="max-width: 80px; margin-top: -10px">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN GANTI CARA METODE KB
                </h4>
              </div>
            </div>
          </a>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="{{ route('post-abortion') }}"
            class="card text-bg-primary text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/4.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN PASCA ABORSI
                </h4>
              </div>
            </div>
          </a>
        </div>
        <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="{{ route('post-partum') }}"
            class="card text-bg-info text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/5.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">KLIEN PASCA BERSALIN/MENYUSUI </h4>
              </div>
            </div>
          </a>
        </div>
        {{-- <div
          class="col-md-6 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="javascript:void(0)"
            class="card text-bg-danger text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/3.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">

                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN MENUNDA KEHAMILAN
                </h4>
              </div>
            </div>
          </a>
        </div> --}}
        {{-- <div
          class="col-md-4 d-flex align-items-stretch card-container animate__animated animate__fadeInLeft"
        >
          <a
            href="javascript:void(0)"
            class="card text-bg-secondary text-white w-100 card-hover"
          >
            <div class="card-body">
              <div class="d-flex align-items-center">
                <img src="{{ asset('assets/icons/6.gif') }}" alt="" class="mt-2" style="max-width: 60px; background-color:white; border-radius:20px;">
                <div class="ms-auto">
                  <i class="ti ti-arrow-right fs-8"></i>
                </div>
              </div>
              <div class="mt-4">
                <h4 class="card-title mb-1 text-white">
                    KLIEN PADA AKHIR MASA REPRODUKSI
                </h4>
              </div>
            </div>
          </a>
        </div> --}}
  </div>
</div>

<script>
    document.querySelectorAll('.card-hover').forEach((card) => {
      card.addEventListener('click', function (e) {
        e.preventDefault(); // Mencegah aksi default jika diperlukan

        // Ambil nama kartu dari elemen h4 dengan class .card-title
        const cardTitleElement = this.querySelector('.card-title');
        const cardName = cardTitleElement ? cardTitleElement.textContent.trim() : 'Unknown';

        console.log('Selected card:', cardName);

        // Kirim data ke server menggunakan fetch
        fetch('{{ route("section-card") }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // Token CSRF untuk keamanan
          },
          body: JSON.stringify({ selected_card: cardName }), // Data yang dikirim
        })
          .then((response) => response.json())
          .then((data) => {
            console.log(data.message); // Berikan feedback ke user jika diperlukan

            // Lakukan navigasi jika diperlukan
            const selectedValue = this.getAttribute('href');
            if (selectedValue !== 'javascript:void(0)') {
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
