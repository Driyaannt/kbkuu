@extends('layouts.app')

@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full">
<div class="body-wrapper">
    <div class="container-fluid">
      <div class="card  shadow-none position-relative overflow-hidden mb-4 card-container animate__animated animate__fadeInUp" style="background-color: #fff0f3;">
        <div class="card-body px-4 py-3">
          <div class="row align-items-center">
            <div class="col-9">
              <h4 class="fw-semibold mb-8">Selamat Datang Di Aplikasi KBKUU</h4>
              <div class="row gap-2 mt-2">
                <div class="col-md-5">
                  <button type="button" class="btn d-flex bg-primary-subtle w-100 d-block text-primary ">
                    <span class="badge text-bg-primary me-2">1</span>MENDAPATKAN INFORMASI YANG TEPAT
                  </button>
                </div>
                <div class="col-md-5">
                  <button type="button" class="btn d-flex bg-success-subtle w-100 d-block text-success ">
                    <span class="badge text-bg-success me-2">2</span> MEMILIH DAN MEMAKAI METODE KB
                  </button>
                </div>
                <div class="col-md-5">
                  <button type="button" class="btn d-flex bg-warning-subtle w-100 d-block text-warning ">
                    <span class="badge text-bg-warning me-2">3</span>
                    MENGATASI KELUHAN
                  </button>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="text-center mb-n5">
                <img src="{{ asset('assets/images/bidan.png') }}" alt="modernize-img" class="img-fluid mb-n4" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card card-container animate__animated animate__fadeInUp">
        <div class="card-body">
          <h5 class="mb-3">Ceritakan tentang diri anda!</h5>
          <form action="{{ route('save-form-data') }}" method="POST">
            @csrf <!-- CSRF Token untuk menghindari serangan CSRF -->

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama_akseptor" placeholder="Nama Akseptor" />
                        <label for="nama_akseptor">Nama Akseptor</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama_suami" placeholder="Nama Suami" />
                        <label for="nama_suami">Nama Suami</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" />
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="tujuan_kb" placeholder="Tujuan Mengikuti Program KB" />
                        <label for="tujuan_kb">Tujuan Mengikuti Program KB</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="no_hp" placeholder="No Hp" />
                        <label for="no_hp">No Hp</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" />
                        <label for="alamat">Alamat</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-md-flex align-items-center mt-3">
                        <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                                <div class="d-flex align-items-center">
                                    <i class="ti ti-send me-2 fs-4"></i>
                                    Submit
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection