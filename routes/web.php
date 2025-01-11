<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetodeKBController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\AdminController;


// route home
Route::get('/homepage', function () {
    if(session()->has('data_diri') || session()->has('select_menu')) {
        session()->forget('data_diri');
        session()->forget('select_menu');
    }
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('layouts.homepage.homepage');
})->name('homepage');

Route::get('/kuisioner', function () {
    return view('layouts.kuisioner.kuisioner');
})->name('kuisioner');

Route::post('/save-kuisioner', [KuisionerController::class, 'store'])->name('save-kuisioner');

Route::post('/save-form-data', [HomeController::class, 'saveFormData'])->name('save-form-data');
Route::post('/section-card', [HomeController::class, 'sectionCard'])->name('section-card');

Route::get('/main-menu', function () {
    if(!session()->has('data_diri')) {
        return redirect()->route('home');
    }

    return view('layouts.main-menu.menu');
})->name('menu');

Route::get('/dashboard', function () {
    return view('layouts.dashboard.dashboard');
})->name('dashboard');

// route kb-method
Route::get('/kb-method', [MetodeKBController::class, 'index'])->name('kb-method');
Route::get('/change-method', [MetodeKBController::class, 'ChangeMethod'])->name('change-method');
Route::get('/post-abortion', [MetodeKBController::class, 'postAbortion'])->name('post-abortion');
Route::get('/post-partum', [MetodeKBController::class, 'postPartum'])->name('post-partum');
Route::post('/save-form-result', [MetodeKBController::class, 'saveFormData'])->name('save-form-result');

Route::get('/get-form-data', function () {
    // Ambil data dari session
    $formData = session('data_diri', []);

    // Mengembalikan data sebagai JSON
    return response()->json($formData);
})->name('get-form-data');

Route::get('/check-session', function () {
    return response()->json([
        'session_id' => session()->getId(), // Menampilkan ID sesi
        'session_data' => session()->all()  // Menampilkan semua data sesi
    ]);
});

// router pdf
Route::get('/book-abpk', function () {
    return view('layouts.book-abpk.book-abpk');
})->name('book-abpk');


// route Admin
Route::get('/admin', function () {
    return view('layouts.admin.home-admin');
})->name('admin');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
