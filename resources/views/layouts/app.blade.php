<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kbkuu</title>

    <!-- Favicon -->
{{-- <link rel="shortcut icon" type="image/png" href="{{ asset('dist/images/logos/favicon.ico') }}" />   --}}

<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

<!-- Core CSS -->
<link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}" />
<link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/custom.css') }}" />
<link rel="stylesheet" href="{{ asset('dist/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/libs/prismjs/themes/prism-okaidia.min.css') }}">



<!-- Animate.css (CDN tetap) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">


</head>
<body>
    <!-- Topbar -->
    @include('components.topbar.topbar')

    <!-- Konten utama -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #FFCCD5 !important; color: white !important;">
            <p class="text-dark mt-3 fw-bold">By Nesya Polkesbaya | © 2025 KBKUU. All rights reserved.</p>
        </div>
    </footer>

</body>

<!-- Core JS Libraries -->
<script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core Files -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
{{-- <script src="{{ asset('dist/js/app.horizontal.init.js') }}"></script> --}}
<script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>

<!-- Current Page JS Files -->
<script src="{{ asset('dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
{{-- <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script> --}}
{{-- <script src="{{ asset('dist/js/dashboard.js') }}"></script> --}}

@if(Request::is('dashboard'))
    <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/js/dashboard5.js') }}"></script>
@endif

<script src="{{ asset('dist/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ asset('dist/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('dist/js/forms/form-wizard.js') }}"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


 {{-- <!-- ---------------------------------------------- -->
<script src="{{ asset('dist/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/js/datatable/datatable-advanced.init.js') }}"></script>
<script src="{{ asset('dist/cdn-datatables/buttons/1.5.1/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('dist/cdn-datatables/buttons/1.5.1/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('dist/cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
<script src="{{ asset('dist/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js') }}"></script>
<script src="{{ asset('dist/cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js') }}"></script>
<script src="{{ asset('dist/cdn-datatables/buttons/1.5.1/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('dist/cdn-datatables/buttons/1.5.1/js/buttons.print.min.js') }}"></script> --}}


 <!-- Include jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <!-- Include DataTables JS -->
 <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

</html>
