@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="card shadow-none position-relative overflow-hidden mt-3 card-container" style="background-color: #fff0f3">
    <div class="card-body px-4 py-3">
        <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Book ABPK</h4>
                <p class="text-muted mb-0">
                    Buku ini berisi materi-materi yang berkaitan dengan ABPK
                </p>
                <div class="d-flex gap-2 mt-2">
                    {{-- <a href="{{ asset('file/book-abpk.pdf') }}" class="btn btn-primary btn-sm" download>
                        <i class="bi bi-download"></i> Download
                    </a> --}}
                    <a href="https://kbkuu.my-skripsi.my.id/file/book-abpk.pdf" class="btn btn-secondary btn-md">
                        <i class="bi bi-eye"></i> Download
                    </a>
                    <a href="{{route('post-test-kuisioner')}}" class="btn btn-secondary btn-md" >Isi PostTest Anda</a>
                </div>
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
    {{-- <div id="pdfContainer" style="height: 100vh; width: 100%; overflow: auto;"></div> --}}
    <a href="https://85f00861-trial.flowpaper.com/KBKUpdf1/#PreviewMode=Miniature" class="fp-embed" data-fp-width="400px" data-fp-height="300px" style="max-width: 100%">
</div>


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.8.162/pdf.min.js"></script> --}}
<script async defer src="https://cdn-online.flowpaper.com/zine/3.8.5/js/embed.min.js"></script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
    const url = '{{ asset("file/book-abpk.pdf") }}';
    const pdfContainer = document.getElementById('pdfContainer');

    // Dapatkan ukuran kontainer
    const containerWidth = pdfContainer.clientWidth;

    // Muat dokumen PDF
    const loadingTask = pdfjsLib.getDocument(url);
    loadingTask.promise.then(pdf => {
        for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
            pdf.getPage(pageNumber).then(page => {
                // Hitung skala berdasarkan lebar kontainer
                const viewport = page.getViewport({ scale: 1.0 });
                const scale = containerWidth / viewport.width; // Skala agar pas dengan lebar kontainer
                const scaledViewport = page.getViewport({ scale });

                // Buat elemen canvas
                const canvas = document.createElement('canvas');
                canvas.style.marginBottom = '10px';

                const context = canvas.getContext('2d');
                canvas.width = scaledViewport.width;
                canvas.height = scaledViewport.height;

                pdfContainer.appendChild(canvas);

                // Render halaman PDF ke canvas
                page.render({ canvasContext: context, viewport: scaledViewport });
            });
        }
    }).catch(error => {
        console.error('Error loading PDF:', error);
    });
});

</script> --}}

@endsection
