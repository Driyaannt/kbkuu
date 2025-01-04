@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="card shadow-none position-relative overflow-hidden mt-3 card-container animate__animated animate__fadeInUp" style="background-color: #fff0f3">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Book ABPK</h4>
        </div>
        <div class="col-3">
          <div class="text-center mb-n5">
            <img src="{{ asset('assets/images/bidan.png') }}" alt="" class="img-fluid mb-n4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-4">
     <!-- PDF Viewer Responsif -->
     <div class="ratio ratio-1x1 d-sm-none">
        <!-- Tampilan untuk perangkat kecil (HP) -->
        <iframe
            src="{{ asset('file/book-abpk.pdf') }}"
            allowfullscreen
            style="border: none;">
        </iframe>
    </div>
    <div class="ratio ratio-16x9 d-none d-sm-block">
        <!-- Tampilan untuk perangkat lebih besar -->
        <iframe
            src="{{ asset('file/book-abpk.pdf') }}"
            allowfullscreen
            style="border: none;">
        </iframe>
    </div>

</div>

@endsection
