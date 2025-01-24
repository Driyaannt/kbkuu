@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="card shadow-none position-relative overflow-hidden mt-3 card-container" style="background-color: #fff0f3">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-lg-9 col-12">
                <h4 class="fw-semibold mb-3">Book KBKUU</h4>
                <p class="text-muted mb-2">
                    Buku ini berisi materi-materi yang berkaitan dengan KBKUU.
                </p>
                <div class="d-flex gap-2 mt-3 flex-wrap">
                    <a href="https://kbkuu.my-skripsi.my.id/file/book-abpk.pdf" class="btn btn-secondary btn-md" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-eye"></i> Lihat Buku
                    </a>
                    <a href="{{ route('post-test-kuisioner2') }}" class="btn btn-secondary btn-md">
                        Isi Post-Test Anda
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-12 text-center mt-3 mt-lg-0">
                <img src="{{ asset('assets/images/bidan.png') }}" alt="Bidan Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="container mt-4 mb-4">
    <a href="https://85f00861-trial.flowpaper.com/KBKUpdf1/#PreviewMode=Miniature" class="fp-embed" data-fp-width="100%" data-fp-height="400px" style="display: block; max-width: 100%;"></a>
</div>

<script async defer src="https://cdn-online.flowpaper.com/zine/3.8.5/js/embed.min.js"></script>

@endsection
