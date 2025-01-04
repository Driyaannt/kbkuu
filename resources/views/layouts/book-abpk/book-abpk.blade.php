@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="card bg-light-info shadow-none position-relative overflow-hidden mt-3 card-container animate__animated animate__fadeInUp">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Metode Pemilihan KB</h4>
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
    <div class="ratio ratio-16x9">
        <iframe
            src="{{ asset('file/book-abpk.pdf') }}"
            allowfullscreen
            style="border: none;">
        </iframe>
    </div>
</div>


@endsection
