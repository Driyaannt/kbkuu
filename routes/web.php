<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MetodeKBController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\KuisionerController2;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;


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

Route::get('/kuisioner2', function () {
    return view('layouts.kuisioner2.kuisioner2');
})->name('kuisioner2');


Route::get('/post-test-kuisioner', function () {
    return view('layouts.post-test-kuisioner.post-test-kuisioner');
})->name('post-test-kuisioner');

Route::get('/post-test-kuisioner2', function () {
    return view('layouts.post-test-kuisioner2.post-test-kuisioner2');
})->name('post-test-kuisioner2');

Route::post('/save-post-test-kuisioner', [KuisionerController::class, 'PostTestStore'])->name('save-post-test-kuisioner');
Route::post('/save-post-test-kuisioner2', [KuisionerController2::class, 'PostTestStore'])->name('save-post-test-kuisioner2');


Route::post('/save-kuisioner', [KuisionerController::class, 'store'])->name('save-kuisioner');
Route::post('/save-kuisioner2', [KuisionerController2::class, 'store'])->name('save-kuisioner2');


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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



Route::get('/usage-category', function () {
    return view('layouts.usage-category.usage-category');
})->name('usage-category');


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
Route::get('/book-kbkuu', function () {
    return view('layouts.book-abpk.book-abpk');
})->name('book-abpk');


// route Admin
Route::get('/admin', function () {
    return view('layouts.admin.home-admin');
})->name('admin');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
