@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="card bg-light-info shadow-none position-relative overflow-hidden mt-3 card-container animate__animated animate__fadeInUp" style="background-color: #fff0f3 !important">
    <div class="card-body px-4 py-3">
      <div class="row align-items-center">
        <div class="col-9">
          <h4 class="fw-semibold mb-8">Pasca Bersalin/Menyusui</h4>
        </div>
        <div class="col-3">
          <div class="text-center mb-n5">
            <img src="{{ asset('assets/images/bidan.png') }}" alt="" class="img-fluid mb-n4">
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="card card-container animate__animated animate__fadeInUp">
    <div class="card-body wizard-content">
        <a href="{{ route('menu') }}" class="me-2 btn btn-outline-secondary">
            <i class="ti ti-arrow-left"></i> Back
          </a>
      <form action="/save-form-result" method="POST" class="validation-wizard wizard-circle mt-2">
        <!-- Step 1 -->
        @csrf
        <h6>Step 1</h6>
        <section>
            <div class="card-style card-usia rounded-3 mx-auto card-hover h-50 mt-2 card-container animate__animated animate__fadeInDown" data-value="Usia Kurang Dari 20 Tahun" id="card1">
                <a href="javascript:void(0);" class="stretched-link"></a>
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="circle-bg">
                            <h6 class="number-text mt-2">1</h6>
                        </span>
                        <div class="ms-3">
                            <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">USIA KURANG DARI 20 TAHUN</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-style card-usia rounded-3 mx-auto card-hover h-50 mt-2 card-container animate__animated animate__fadeInDown" data-value="Usia 20-35 Tahun" id="card2">
                <a href="javascript:void(0);" class="stretched-link"></a>
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="circle-bg">
                            <h6 class="number-text mt-2">2</h6>
                        </span>
                        <div class="ms-3">
                            <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">USIA 20-35 TAHUN</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-style card-usia rounded-3 mx-auto card-hover h-50 mt-2 card-container animate__animated animate__fadeInDown" data-value="Usia Lebih Dari 35 Tahun" id="card3">
                <a href="javascript:void(0);" class="stretched-link"></a>
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <span class="circle-bg">
                            <h6 class="number-text mt-2">3</h6>
                        </span>
                        <div class="ms-3">
                            <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">USIA LEBIH DARI 35 TAHUN</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Step 2 -->
        <h6>Step 2</h6>
        <section>
            <div class="row">
                <!-- Card untuk Riwayat Tekanan Darah Tinggi -->
                <div class="col-md-5 col-lg-5" id="card1">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">1</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)</h6>
                                </div>
                            </div>
                            <!-- Badge untuk status tekanan darah -->
                            <span>Tekanan Darah Anda :</span><div id="hipertensi-badge" class="badge mt-1"></div>
                        </div>
                    </div>
                </div>

                <!-- Tombol untuk Membuka Modal -->
                <div class="col-md-1 col-lg-1 mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vertical-center-modal-hipertensi">
                        Check Tekanan
                    </button>
                </div>


                <div class="col-md-5 col-lg-5" id="card2">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'OBESITAS IMT >27')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">2</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">OBESITAS IMT >27</h6>
                                </div>
                            </div>
                            <div id="bmi-badge" class="badge mt-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-lg-1 mb-3">
                    <button
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#vertical-center-modal"
                    >
                    Check IMT
                    </button>
                </div>

                <div class="col-md-5 col-lg-5 card-hover" id="card3">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'RIWAYAT PENYAKIT IMS DAN HIV')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">3</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">RIWAYAT PENYAKIT IMS DAN HIV</h6>
                                </div>
                            </div>
                        </div>
                        <span>Status Anda :</span>
                        <div id="ims-badge" class="badge mt-1">Belum dipilih</div>
                    </div>
                </div>

                <!-- Tombol untuk Membuka Modal (Tombol ini bisa dihapus karena card akan membuka modal langsung) -->
                <div class="col-md-1 col-lg-1 mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hivModal">
                        Check IMS
                    </button>
                </div>

                <div class="col-md-5 col-lg-5 card-hover" id="card4">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">4</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA</h6>
                                </div>
                            </div>
                            <span>Status Gula Anda :</span>
                          <div id="gula-badge" class="badge mt-1"></div>
                        </div>
                    </div>
                </div>

                <!-- Tombol untuk Membuka Modal -->
                <!-- Tombol untuk Membuka Modal -->
                <div class="col-md-1 col-lg-1 mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vertical-center-modal-diabetes">
                        Check GDA
                    </button>
                </div>


                <div class="col-md-6 col-lg-6 card-hover" id="card5">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">5</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Step 3 -->
        <h6>Step 3</h6>
        <section>
            <!-- Row -->
            <div class="row">
              <div class="col-lg-12">
                <!-- ---------------------
                                    start Form with view only
                                ---------------- -->
                <div class="card">
                  <div class="card-header bg-primary">
                    <h5 class="mb-0 text-white">Hasil Rekomendasi</h5>
                  </div>
                  <form class="form-horizontal">
                    <div class="form-body">
                      <div class="card-body">
                        <h5 class="card-title mb-0">Data Diri</h5>
                      </div>
                      <hr class="mt-0 mb-2" />
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="control-label text-end col-md-3">Nama Akseptor:</label>
                                <div class="col-md-9">
                                  <p id="nama-akseptor" class="form-control-static">Iga Wardani</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="control-label text-end col-md-3">Nama Suami:</label>
                                <div class="col-md-9">
                                  <p id="nama-suami" class="form-control-static">Driya Ananta</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="control-label text-end col-md-3">Pendidikan Terakhir:</label>
                                <div class="col-md-9">
                                  <p id="pendidikan-terakhir" class="form-control-static">S1</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="control-label text-end col-md-3">Tujuan KB:</label>
                                <div class="col-md-9">
                                  <p id="tujuan-kb" class="form-control-static">Child Free</p>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="control-label text-end col-md-3">No Hp:</label>
                                <div class="col-md-9">
                                  <p id="no-hp" class="form-control-static">085234827389</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="control-label text-end col-md-3">Alamat:</label>
                                <div class="col-md-9">
                                  <p id="alamat" class="form-control-static">Bocek</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <h5 class="mb-0 mt-3 mb-4">Pilihanmu</h5>
                        <hr class="mt-0 mb-2" />
                        <div class="row">
                            <div class="col-md-4">
                            <div class="card rounded-3 mx-auto card-hover h-60 mt-2 card-container animate__animated animate__fadeInDown">
                                <a href="#" class="stretched-link"></a>
                                <div class="card-body p-3">
                                  <div class="d-flex align-items-center">
                                    <span class="circle-bg">
                                      <h6 class="number-text mt-2">1</h6>
                                    </span>
                                    <div class="ms-3">
                                      <p class="value-card-1 text-dark mb-0" style="max-width: 200px; font-size:0.9em;">Usia Kurang Dari 20 Tahun</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card rounded-3 mx-auto card-hover h-60 mt-2 card-container animate__animated animate__fadeInDown">
                                    <a href="#" class="stretched-link"></a>
                                    <div class="card-body p-3">
                                      <div class="d-flex align-items-center">
                                        <span class="circle-bg">
                                          <h6 class="number-text mt-2">2</h6>
                                        </span>
                                        <div class="ms-3">
                                          <p class="value-card-2 text-dark mb-0" style="max-width: 200px; font-size:0.9em;">Belum Pernah Hamil</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card rounded-3 mx-auto card-hover h-60 mt-2 card-container animate__animated animate__fadeInDown">
                                        <a href="#" class="stretched-link"></a>
                                        <div class="card-body p-3">
                                          <div class="d-flex align-items-center">
                                            <span class="circle-bg">
                                              <h6 class="number-text mt-2">3</h6>
                                            </span>
                                            <div class="ms-3">
                                              <p class="value-card-3 text-dark mb-0" style="max-width: 200px; font-size:0.9em;">Hipertensi</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                        </div>
                        <!--/row-->
                        <h5 class="mb-0 mt-3">Rekomendasi</h5>
                      </div>

                      <hr class="mt-0 mb-2" />
                      <div class="card-body">
                        <div class="row">
                            <!-- Tombol dan kolaps pertama -->
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contentKondom">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample1"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample1"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/kondom.jpg') }}" class="rounded img-fluid" style="width: 150px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        Kondom
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- Konten collaps pertama -->
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample1" id="contentKondom">
                                    <div class="card card-body">
                                        <h5 class="text-danger">Harus diperhatikan!</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                            <li>JANGAN GUNAKAN LEBIH DARI SATU KONDOM</li>
                                            <li>JANGAN GUNAKAN JIKA KEMASAN SOBEK, EXP DATE, ROBEK, RAPUH LENGKET.</li>
                                            <li>JANGAN GUNAKAN JIKA ADA REAKSI ALERGI.</li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">Cara Pakai Kondom</h5>
                                        <ol>
                                            <li>PAKAI SAAT PENIS EREKSI</li>
                                            <li>PAKAI SEBELUM PENIS MASUK DI VAGINA</li>
                                            <li>PASANG KONDOM PADA PENIS DAN BUKA DARI PANGKAL PENIS</li>
                                            <li>SISAKAN RUANG UJUNG KONDOM UNTUK AIR MANI JANGAN SAMPAI ADA UDARA.</li>
                                            <li>JIKA ADA UDARA CUBIT UJUNG KONDOM SAAT DIPAKAI.</li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">Kelebihan Pakai Kondom</h5>
                                        <ol>
                                            <li>MURAH ,DAPAT DIBELI BEBAS</li>
                                            <li>PROTEKSI GANDA (MENCEGAH KEHAMILAN DAN JUGA PENYAKIT MENULAR SEKSUAL SEPERTI HIV, IMS).  </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">Keterbatasan Kondom</h5>
                                        <ol>
                                            <li>MENGGANGGU HUBUNGAN SEKSUAL (MENGURANGI SENTUHAN LANGSUNG).</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            {{-- buatkan yang pil kb --}}


                            <!-- Tombol dan kolaps kedua -->
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contentSenggamaPutus">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample2"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample2"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/images/senggama-putus.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        Senggama Putus
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Konten collaps kedua -->
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample2" id="contentSenggamaPutus">
                                    <div class="card card-body">
                                        <h5 class="text-danger">Harus diperhatikan!</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                            <li>MENGETAHUI MASA SUBUR</li>
                                            <li>MENGHINDARI BERHUBUNGAN PADA SAAT MASA SUBUR</li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">Cara Senggama Putus</h5>
                                        <ol>
                                            <li>ALAT KELAMIN PRIA DIKELUARKAN SEBELUM EJAKULASI SEHINGGA SPERMA TIDAK MASUK KE VAGINA</li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">Kelebihan Senggama Putus</h5>
                                        <ol>
                                            <li>TANPA BIAYA</li>
                                            <li>TIDAK ADA RESIKO KESEHATAN YANG BERHUBUNGAN DENGAN KONTRASEPSI</li>
                                            <li>TIDAK ADA EFEK KARENA HORMON  </li>
                                            <li>MENINGKATKAN KETERLIBATAN SUAMI DALAM KB </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">Keterbatasan Senggama Putus</h5>
                                        <ol>
                                            <li>MENGURANGI KENIKMATAN DALAM BERHUBUNGAN SEKSUAL </li>
                                            <li>PERLU PANTANG MASA SUBUR   </li>
                                            <li>EFEKTIVITAS SANGAT BERGANTUNG PADA KESEDIAAN PASANGAN UNTUK MELAKUKAN SANGGAMA TERPUTUS </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contentPilKb">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample3"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample3"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/icon-rekomendasi/PIL.jpg') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        Pil Kb
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Konten collaps Ketiga -->
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample3" id="contentPilKb">
                                    <div class="card card-body">
                                        <img src="{{asset('assets/icon-rekomendasi/PIL.jpg')}}" class="img-fluid"
                                        style="max-height: 240px; object-fit: contain; margin: 0 auto; display: block;">
                                        <h5 class="text-danger mt-2">Harus diperhatikan!</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                            <li>DIKONSUMSI DI JAM YANG SAMA PER 24 JAM (MISAL JAM HARI INI JAM 19.00 BESOK JUGA JAM 19.00)                                            </li>
                                            <li>JIKA PIL TERLEWAT MAKA MINUM DUA PIL SEGERA SETELAH INGAT                                            </li>
                                            <li>JIKA TERDAPAT DUA JENIS PIL DALAM BUNGKUS, MINUM WARNA PIL PUTIH (PIL PLASEBO) SAAT MENSTRUASI                                            </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">CARA KONSUMSI PIL                                         </h5>
                                        <ol>
                                            <li>MULAI MINUM DARI HARI PERTAMA DARI PERIODE MENSTRUASI (HARI KELIMA PERIODE MENSTRUASI)                                            </li>
                                            <li>
                                                MENGIKUTI ARAH PANAS YANG ADA DI BUNGKUS PIL KB
                                            </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">Kelebihan</h5>
                                        <ol>
                                            <li>
                                                DAPAT MENGONTROL PEMAKAIAN
                                            </li>
                                            <li>
                                                MUDAH DIGUNAKAN DANMUDAH DIDAPAT
                                            </li>
                                            <li>
                                                SIKLUS HAID MENJADI TERATUR
                                            </li>
                                            <li>
                                                KESUBURAN SEGERA KEMBALI SETELAH PENGGUNAAN PIL DIHENTIKAN
                                            </li>
                                            <li>
                                                TIDAK MENGGANGGU HUBUNGAN SEKSUAL
                                            </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">Keterbatasan Senggama Putus</h5>
                                        <ol>
                                            <li>MAHAL                                            </li>
                                            <li>
                                                HARUS DIMINUM SETIAP HARI SECARA TERATUR
                                            </li>
                                            <li>
                                                MENGURANGI ASI PADA PEREMPUAN MENYUSUI
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contentIud">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample4"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample4"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/icon-rekomendasi/IUD.jpg') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        IUD
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Konten collaps Ketiga -->
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample4" id="contentIud">
                                    <div class="card card-body">
                                        <img src="{{asset('assets/icon-rekomendasi/IUD.jpg')}}" class="img-fluid"
                                        style="max-height: 240px; object-fit: contain; margin: 0 auto; display: block;">
                                        <h5 class="text-danger mt-2">Harus dipverhatikan!</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                            <li>
                                                PEMASANGAN IUD MELALUI JALAN LAHIR DIPASANG SAAT MENSTRUASI HARI KE 3 ATAU 4 DARI SIKLUS  MENS.
                                            </li>
                                            <li>
                                                JIKA BELUM/TIDAK MENSTRUASI DITUNGGU SAMPAI SIKLUS MENSTRUASI SELANJUTNYA.
                                            </li>
                                            <li>
                                                JIKA SIKLUS MENSTRUASI TIDAK TERATUR SEBELUM PASANG MELAKUKAN TES TESPACK.
                                            </li>
                                            <li>
                                                SETELAH DIPASANG IUD WAJIB KONTROL MESKIPUN ADA/TIDAK ADA KELUHAN
                                            </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">KELEBIHAN PEMASANGAN IUD </h5>
                                        <ol>
                                            <li>
                                                EFEKTIF SEGERA SETELAH PEMASANGAN
                                            </li>
                                            <li>
                                                METODE KB JANGKA PANJANG
                                            </li>
                                            <li>
                                                TIDAK MEMPENGARUHI HUBUNGAN SEKSUAL
                                            </li>
                                            <li>
                                                TIDAK MEMPENGARUHI PRODUKSI ASI
                                            </li>
                                            <li>
                                                TIDAK MEMBUAT BB NAIK
                                            </li>
                                            <li>
                                                TIDAK MEMBUAT FLEK WAJAH
                                            </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">Keterbatasan Pemasangan IUD</h5>
                                        <ol>
                                            <li>
                                                MENTRUASI TIDAK TERATUR
                                            </li>
                                            <li>
                                                MENS BANYAK DAN LAMA
                                            </li>
                                            <li>
                                                KRAM ATAU NYERI PERUT
                                            </li>
                                            <li>
                                                SUAMI MERASAKAN BENANG SAAT SENGGAMA
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contenImplan">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample5"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample5"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/icon-rekomendasi/implant.jpg.crdownload.jpeg') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        Implan
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Konten collaps Ketiga -->
                                <div class="collapse multi-collapse mt-5" id="multiCollapseExample5" id="contenImplan">
                                    <div class="card card-body">
                                        <img src="{{asset('assets/icon-rekomendasi/implant.jpg.crdownload.jpeg')}}" class="img-fluid"
                                        style="max-height: 240px; object-fit: contain; margin: 0 auto; display: block;">
                                        <h5 class="text-danger mt-2">Harus dipverhatikan!</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                           <li>
                                            IMPLAN TIDAK BOLEH DIGUNAKAN PADA PASIEN YANG MENDERITA KANKER PAYUDARA/BENJOLAN PAYUDARA
                                           </li>
                                           <li>
                                            PEMASANGAN IMPLAN PADA HARI KE 1–5 MENSTRUASI
                                           </li>
                                           <li>
                                            PEMASANGAN SAAT TIDAK MENSTRUASI TETAPI TIDAK HAMIL DENGAN MEMASTIKAN HAID TERATUR DAN TESPACK (NEGATIF).
                                           </li>
                                           <li>
                                            SETELAH DIPASANG IUD WAJIB KONTROL MESKIPUN ADA/TIDAK ADA KELUHAN
                                           </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">KELEBIHAN PEMASANGAN IMPLAN </h5>
                                        <ol>
                                            <li>
                                                EFEKTIF SETELAH PEMASANGAN
                                            </li>
                                            <li>
                                                METODE JANGKA PANJANG 3-5 TAHUN
                                            </li>
                                            <li>
                                                TIDAK MENGGANGGU HUBUNGAN SEKSUAL
                                            </li>
                                            <li>
                                                TIDAK MEMPENGARUHI PRODUKSI ASI
                                            </li>
                                            <li>
                                                KESUBURAN KEMBALI SETELAH IMPLAN DILEPAS
                                            </li>
                                            <li>
                                                MENGURANGI JUMLAH DARAH HAID
                                            </li>

                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">Keterbatasan Pemasangan IMPLAN</h5>
                                        <ol>
                                           <li>
                                            MENTRUASI TIDAK TERATUR
                                           </li>
                                           <li>
                                            MENSTRUASI BANYAK ATAU SEDIKIT
                                           </li>
                                           <li>
                                            MEMPENGARUHI HORMON SEPERTI BB NAIK/TURUN, KULIT (FLEK WAJAH)
                                           </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contenSuntik">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample6"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample6"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/icon-rekomendasi/SUNTIK.jpg') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        Suntik
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Konten collaps Ketiga -->
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample6" id="contenSuntik">
                                    <div class="card card-body">
                                        <img src="{{asset('assets/icon-rekomendasi/SUNTIK.jpg')}}" class="img-fluid"
                                        style="max-height: 240px; object-fit: contain; margin: 0 auto; display: block;">
                                        <h5 class="text-danger mt-2">JARAK WAKTU PEMAKAIAN YANG PERLU DIPERHATIKAN !</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                           <li>
                                            KB 1 BULAN (KEMBALI 28 HARI SELANJUTNYA)
                                           </li>
                                           <li>
                                            KB 2 BULAN (KEMBALI 58 HARI SELANJUTNYA)
                                           </li>
                                           <li>
                                            KB 3 BULAN (KEMBALI 12 MINGGU SELANJUTNYA)
                                           </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">KELEBIHAN SUNTIK </h5>
                                        <ol>
                                            <li>
                                                TIDAK PERLJU PEMAKAIAN SETIAP HARI
                                            </li>
                                            <li>
                                                DAPAT DIHENTIKAN KAPAN SAJA
                                            </li>
                                            <li>
                                                TIDAK BERPENBARUH PADA HUBUNGAN SEKSUAL
                                            </li>
                                            <li>
                                                BAIK UNTUK MENJARAKKAN KEHAMILAN
                                            </li>

                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">EFEK SAMPING SUNTIK</h5>
                                        <ol>
                                           <li>
                                            MENTRUASI TIDAK TERATUR
                                           </li>
                                           <li>
                                            MENSTRUASI BANYAK ATAU SEDIKIT
                                           </li>
                                           <li>
                                            MEMPENGARUHI HORMON SEPERTI BB NAIK/TURUN, KULIT (FLEK WAJAH)
                                           </li>
                                           <li>
                                            KEMUNGKINAN KETERLAMBATAN PEMULIHAN MASA SUBUR SETELAH PENGEHENTIAN PEMAKAIAN
                                           </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 card-container animate__animated animate__fadeInUp mb-3" id="contentSteril">
                                <a data-bs-toggle="collapse"
                                    href="#multiCollapseExample7"
                                    role="button"
                                    aria-expanded="true"
                                    aria-controls="multiCollapseExample7"
                                    class="text-dark fs-6 link lh-sm">
                                    <div class="card w-100 card-hover">
                                        <div class="p-2 d-flex align-items-stretch h-100">
                                            <div class="row">
                                                <div class="col-4 col-md-3 d-flex align-items-center">
                                                    <img src="{{ asset('assets/icon-rekomendasi/steril.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
                                                </div>
                                                <div class="col-8 col-md-9 d-flex align-items-center">
                                                    <div style="font-size: 0.9rem;" class="ms-2">
                                                        MOW/STERIL
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- Konten collaps Ketiga -->
                                <div class="collapse multi-collapse mt-2" id="multiCollapseExample7" id="contentSteril">
                                    <div class="card card-body">
                                        <img src="{{asset('assets/icon-rekomendasi/steril.png')}}" class="img-fluid"
                                        style="max-height: 240px; object-fit: contain; margin: 0 auto; display: block;">
                                        <h5 class="text-danger">JARAK WAKTU PEMAKAIAN YANG PERLU DIPERHATIKAN !</h5>
                                        <p>Jika Anda memilih metode KB ini, Anda harus memperhatikan beberapa hal berikut:</p>
                                        <ol>
                                          <li>
                                            PEREMPUAN DENGAN PERDARAHAN PERVAGINAM YANG BELUM JELAS (MENSTRUASI TERUS MENERUS) TIDAK DIPERBOLEHKAN STERIL.
                                          </li>
                                          <li>
                                            PEREMPUAN YANG STERIL HARUS BENAR INGIN MENGAKHIRI KESUBURAN.
                                          </li>
                                          <li>
                                            STERIL DILAKUKAN JIKA PEREMPUAN USIA>35 SUDAH MEMILIKI ANAK DENGAN JUMLAH >2
                                          </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-success">KELEBIHAN STERIL MOW/STERIL</h5>
                                        <ol>
                                            <li>
                                                SANGAT EFEKTIF DAN PERMANEN
                                            </li>
                                            <li>
                                                MENSTRUASI TERATUR
                                            </li>
                                            <li>
                                                TIDAK MEMPENGARUHI PRODUKSI ASI
                                            </li>
                                            <li>
                                                TIDAK MENGGANGGU BERHUBUNGAN SEKS.
                                            </li>
                                            <li>
                                                TIDAK MEMILIKI EFEK SAMPING JANGKA PANJANG.
                                            </li>
                                        </ol>
                                        <hr class="mt-0 mb-2" />
                                        <h5 class="text-danger">KETERBATASAN MOW/STERIL</h5>
                                        <ol>
                                          <li>
                                            BIAYA CUKUP MAHAL
                                          </li>
                                          <li>
                                            KESUBURAN TIDAK BISA DIPULIHKAN KEMBALI
                                          </li>
                                          <li>
                                            TIDAK BISA MELINDUNGI DARI PENYAKIT MENULAR SEKSUAL
                                          </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-12 p-4">
                                <div class="row gy-3">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-2">
                                            <h6 class="text-primary fw-bold">1. Apa Saja Cara Mencegah Kehamilan? | Mengenal Kontrasepsi</h6>
                                        </div>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" width="100%" height="315"
                                                src="https://www.youtube.com/embed/m4cs1_3DsCo?si=sySWpi_9sI9JEWaM"
                                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-2">
                                            <h6 class="text-primary fw-bold">2. Menggunakan Hormon untuk Mencegah Kehamilan? | Mengenal Kontrasepsi</h6>
                                        </div>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" width="100%" height="315"
                                                src="https://www.youtube.com/embed/Fxrphc-qDUQ?si=Zu_E39MipdwQf7q1"
                                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12 col-12 card">
                                <div class="card-body">
                                    <h5 class="text-success">Kesimpulan</h5>
                                    <p>Setelah membaca rekomendasi di atas, Anda dapat memilih metode KB yang sesuai dengan kebutuhan dan kondisi kesehatan Anda. Jika Anda masih ragu, konsultasikan dengan dokter atau bidan untuk mendapatkan saran yang lebih spesifik.</p>
                                      <a href="http://wa.link/752ysq" class="btn btn-success">Hubungi Kami!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Row -->
          </section>
      </form>
    </div>
  </div>


  <!-- Modal untuk HIV/IMS -->
  <div class="modal fade" id="hivModal" tabindex="-1" aria-labelledby="hivModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hivModalLabel">Informasi HIV/IMS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>HIV/IMS</h6>
                <ul>
                    <li><strong>Dikatakan HIV/IMS jika:</strong></li>
                    <li>1) Ada diagnose dari dokter.</li>
                    <li>2) <strong>PERHATIAN !!!</strong> bagi yang sering berganti pasangan saat berhubungan, memakai tato, sering memakai jarum suntik bergantian.</li>
                    <li>3) Mengonsumsi obat resep dari dokter ARV.</li>
                    <li><strong>Jika belum tahu dan belum periksa,</strong> silakan datang ke fasilitas kesehatan terdekat jika Anda sering berganti pasangan.</li>
                </ul>
                <hr>
                <h6>Pilih Hasil HIV:</h6>
                <div class="card mb-3" id="cardNonReaktif" onclick="selectCard('non-reaktif')">
                    <div class="card-body">
                        <h5 class="card-title">Non-Reaktif</h5>
                        <p class="card-text">Tidak ada antibodi atau antigen HIV yang terdeteksi.</p>
                    </div>
                </div>
                <div class="card mb-3" id="cardReaktif" onclick="selectCard('reaktif')">
                    <div class="card-body">
                        <h5 class="card-title">Reaktif</h5>
                        <p class="card-text">Terdeteksi antibodi atau antigen HIV dalam sampel darah.</p>
                    </div>
                </div>
                <div id="resultBadge" class="mt-3" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>

  {{-- gula  darah --}}
<!-- Modal untuk Input Gula Darah -->
<div class="modal fade" id="vertical-center-modal-diabetes" tabindex="-1" aria-labelledby="vertical-center-modal-diabetesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vertical-center-modal-diabetesLabel">Masukkan Gula Darah atau Hemoglobin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <form id="gulaDarah-form">
                        <!-- Input kadar gula darah -->
                        <div class="mb-3">
                            <label for="gulaDarah" class="form-label">Kadar Gula Darah (mg/dL)</label>
                            <input
                                type="text"
                                class="form-control"
                                id="gulaDarah"
                                placeholder="Masukkan kadar gula darah (misalnya: 200)">
                        </div>
                        <!-- Output status gula darah -->
                        <div class="mb-3">
                            <label for="statusGula" class="form-label">Status Gula Darah</label>
                            <input
                                type="text"
                                class="form-control"
                                id="statusGula"
                                placeholder="Normal / Tinggi / Rendah"
                                readonly>
                        </div>
                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <!-- Keterangan -->
                    <div class="mt-3">
                        <h6>Keterangan:</h6>
                        <ul>
                            <li><strong>Gula Darah Tinggi:</strong> Dikatakan gula darah tinggi jika:</li>
                            <li>1) Hasil laboratorium cek darah pada kadar gula setelah makan >200 mg/dL.</li>
                            <li>2) Ada bawaan dari keluarga.</li>
                            <li>3) Mengonsumsi obat gula darah tinggi resep dari dokter seperti glibet, metformin, insulin.</li>
                            <li><strong>Normal gula darah:</strong> <140 mg/dL.</li>
                            <li>Jika belum tahu dan belum pernah periksa, silakan datang ke fasilitas kesehatan terdekat.</li>
                        </ul>
                        {{-- <h6>Kurang Darah (Anemia):</h6>
                        <ul>
                            <li><strong>Dikatakan kurang darah jika:</strong></li>
                            <li>1) Hasil laboratorium cek darah pada hemoglobin (HB) <12 g/dL.</li>
                            <li>2) Mengonsumsi obat penambah darah seperti FE setiap hari.</li>
                            <li><strong>Normal HB:</strong> 12-16 g/dL.</li>
                            <li>Jika belum tahu dan belum pernah periksa, silakan datang ke fasilitas kesehatan terdekat.</li>
                        </ul> --}}
                    </div>
                </div>
        </div>
    </div>
</div>

  {{-- modal hipertensi --}}
        <<!-- Modal untuk Input Tekanan Darah -->
        <div class="modal fade" id="vertical-center-modal-hipertensi" tabindex="-1" aria-labelledby="vertical-center-modal-hipertensiLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="vertical-center-modal-hipertensiLabel">Masukkan Tekanan Darah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="hipertensi-form">
                            <div class="mb-3">
                                <label for="tekananDarah" class="form-label">Tekanan Darah (misalnya: 190/90)</label>
                                <input type="text" class="form-control" id="tekananDarah" placeholder="Masukkan tekanan darah">
                            </div>
                            <div class="mb-3">
                                <label for="statusDarah" class="form-label">Status Tekanan Darah</label>
                                <input type="text" class="form-control" id="statusDarah" placeholder="Normal / Tinggi / Rendah" readonly>
                            </div>
                            <div id="hipertensi-badge"></div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div class="mt-3">
                            <h6>Keterangan:</h6>
                            <ul>
                                <li>Dikatakan tekanan darah tinggi jika:</li>
                                <li>1) Pernah melakukan tensi darah di fasilitas kesehatan dengan tekanan darah >140/90</li>
                                <li>2) Ada riwayat bawaan dari keluarga</li>
                                <li>3) Mengonsumsi obat tensi resep dari dokter seperti: Amlodipin, captopril, nifedipine, minoxidil, verapamil, hidralazin</li>
                                <li>• Normal tekanan darah tensi kurang dari <120/80</li>
                                <li>• Jika belum tahu dan belum pernah periksa, silakan datang ke fasilitas kesehatan terdekat.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  {{-- modal --}}
                    <div
                        class="modal fade"
                        id="vertical-center-modal"
                        tabindex="-1"
                        aria-labelledby="vertical-center-modal"
                        aria-hidden="true"
                      >
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header d-flex align-items-center">
                              <h4 class="modal-title" id="myLargeModalLabel">
                                Calculate BMI
                              </h4>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">


                                <div class="card">
                                    <div class="px-4 py-3 border-bottom">
                                        <h5 class="card-title fw-semibold mb-0">BMI Calculator</h5>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="mb-4 row align-items-center">
                                            <label for="weight" class="form-label fw-semibold col-sm-3 col-form-label">Weight (kg)</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="weight" placeholder="Enter your weight" required>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label for="height" class="form-label fw-semibold col-sm-3 col-form-label">Height (cm)</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="height" placeholder="Enter your height in cm" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <button class="btn btn-primary" id="calculateBMI">Calculate BMI</button>
                                                <button class="btn btn-secondary" id="resetBMI" style="margin-left: 10px;">Reset</button> <!-- Tombol Reset -->
                                            </div>
                                        </div>
                                        <!-- Canvas for BMI Chart -->
                                        <canvas id="bmiChart" style="margin-top: 20px;"></canvas>
                                        <div id="bmiCategory" style="margin-top: 20px; font-weight: bold;"></div> <!-- Keterangan kategori BMI -->
                                     <!-- Menambahkan rumus IMT -->
                                     <div class="mt-4">
                                        <h6>Rumus IMT (Indeks Massa Tubuh):</h6>
                                        <p>IMT = <strong>Berat Badan (kg)</strong> / (<strong>Tinggi Badan (m)</strong> x <strong>Tinggi Badan (m)</strong>)</p>
                                        <p>Contoh: <br> Berat Badan = 92 kg, Tinggi Badan = 175 cm</p>
                                        <p>IMT = 92 / (1.75 x 1.75) = 30</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button
                                type="button"
                                class="btn btn-light-danger text-danger font-medium waves-effect text-start"
                                data-bs-dismiss="modal"
                              >
                                Close
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <script>
                        function selectCard(status) {
                        // Menghapus tanda "selected" dari semua kartu
                        document.getElementById('cardNonReaktif').classList.remove('border-primary', 'bg-secondary');
                        document.getElementById('cardReaktif').classList.remove('border-primary', 'bg-secondary');

                        // Menambahkan tanda "selected" pada kartu yang dipilih
                        const selectedCard = status === 'non-reaktif' ? 'cardNonReaktif' : 'cardReaktif';
                        document.getElementById(selectedCard).classList.add('border-primary', 'bg-secondary');

                        // Menampilkan hasil sesuai pilihan
                        const resultBadge = document.getElementById('resultBadge');
                        const badgeIms = document.getElementById('ims-badge'); // Mengakses ims-badge

                        if (status === 'non-reaktif') {
                            resultBadge.style.display = 'block';
                            resultBadge.className = 'badge bg-success text-white';
                            resultBadge.textContent = 'Anda NEGATIF HIV';

                            // Update badgeIms
                            badgeIms.className = 'badge bg-success text-white';
                            badgeIms.textContent = 'Status Anda: NEGATIF HIV';
                        } else if (status === 'reaktif') {
                            resultBadge.style.display = 'block';
                            resultBadge.className = 'badge bg-danger text-white';
                            resultBadge.textContent = 'Anda POSITIF HIV';

                            // Update badgeIms
                            badgeIms.className = 'badge bg-danger text-white';
                            badgeIms.textContent = 'Status Anda: POSITIF HIV';
                        }
                    }
                    </script>


                      <script>
                        let bmiChart; // Variabel untuk menyimpan instance chart

                        document.getElementById('calculateBMI').addEventListener('click', function() {
                            // Ambil nilai dari input
                            const weight = parseFloat(document.getElementById('weight').value);
                            const heightInCm = parseFloat(document.getElementById('height').value);

                            // Validasi input
                            if (isNaN(weight) || isNaN(heightInCm) || weight <= 0 || heightInCm <= 0) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Invalid Input',
                                    text: 'Please enter valid weight and height values.',
                                });
                                return;
                            }

                            // Konversi tinggi badan dari cm ke m
                            const heightInM = heightInCm / 100;

                            // Hitung BMI
                            const bmi = weight / (heightInM * heightInM);
                            let bmiCategory = '';

                            // Tentukan kategori BMI
                            if (bmi < 18.5) {
                                bmiCategory = 'Underweight';
                            } else if (bmi >= 18.5 && bmi < 25.0) {
                                bmiCategory = 'Normal weight';
                            } else {
                                bmiCategory = 'Obesity';
                            }

                            // Tampilkan hasil menggunakan SweetAlert2
                            Swal.fire({
                                icon: 'info',
                                title: 'Your BMI Result',
                                text: `Your BMI is ${bmi.toFixed(2)} which is considered ${bmiCategory}.`,
                            });

                            // Tampilkan hasil BMI dan kategori di badge
                            const bmiBadge = document.getElementById('bmi-badge');
                            bmiBadge.textContent = `BMI: ${bmi.toFixed(2)} (${bmiCategory})`;

                            // Sesuaikan warna badge berdasarkan kategori BMI
                            bmiBadge.className = 'badge'; // Reset kelas
                            if (bmiCategory === 'Underweight') {
                                bmiBadge.classList.add('bg-info');
                            } else if (bmiCategory === 'Normal weight') {
                                bmiBadge.classList.add('bg-success');
                            } else {
                                bmiBadge.classList.add('bg-danger');
                            }

                            // Hancurkan grafik sebelumnya jika ada
                            if (bmiChart) {
                                bmiChart.destroy();
                            }

                            // Visualisasi BMI
                            const ctx = document.getElementById('bmiChart').getContext('2d');
                            bmiChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Underweight', 'Normal weight', 'Obesity'],
                                    datasets: [{
                                        label: 'BMI Score',
                                        data: [18.5, 25.0, 40], // Batas atas kategori BMI
                                        backgroundColor: [
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 99, 132, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'Your BMI',
                                        type: 'line',
                                        data: [bmi, bmi, bmi],
                                        borderColor: 'rgba(255, 0, 0, 1)',
                                        backgroundColor: 'rgba(255, 0, 0, 0.2)',
                                        fill: false,
                                        borderWidth: 2,
                                        pointRadius: 5
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            title: {
                                                display: true,
                                                text: 'BMI'
                                            }
                                        }
                                    }
                                }
                            });

                            // Tampilkan kategori BMI di bawah grafik
                            document.getElementById('bmiCategory').innerText = `Your BMI category is: ${bmiCategory}`;
                        });

                        // Event listener untuk tombol reset
                        document.getElementById('resetBMI').addEventListener('click', function() {
                            // Reset input fields
                            document.getElementById('weight').value = '';
                            document.getElementById('height').value = '';

                            // Reset chart and category display
                            if (bmiChart) {
                                bmiChart.destroy(); // Hancurkan grafik sebelumnya
                            }
                            // Render grafik default
                            const ctx = document.getElementById('bmiChart').getContext('2d');
                            bmiChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Underweight', 'Normal weight', 'Obesity'],
                                    datasets: [{
                                        label: 'BMI Score',
                                        data: [18.5, 25.0, 40], // Batas atas kategori BMI
                                        backgroundColor: [
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 99, 132, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true,
                                            title: {
                                                display: true,
                                                text: 'BMI'
                                            }
                                        }
                                    }
                                }
                            });

                            // Reset kategori BMI display
                            document.getElementById('bmiCategory').innerText = '';
                            // Reset badge
                            document.getElementById('bmi-badge').textContent = '';
                            document.getElementById('bmi-badge').className = 'badge'; // Reset kelas
                        });
                    </script>

{{-- gula darah --}}
<script>
    document.getElementById('gulaDarah-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const gulaDarah = document.getElementById('gulaDarah').value; // Input gula darah
        const statusGulaField = document.getElementById('statusGula'); // Input readonly untuk status gula darah
        const gulaBadge = document.getElementById('gula-badge'); // Badge pada card untuk menampilkan status

        // Validasi input gula darah (angka atau desimal)
        const regex = /^(\d+(\.\d+)?)$/;
        const match = gulaDarah.match(regex);

        if (match) {
            const gula = parseFloat(match[1]); // Parsing nilai gula darah

            let status = "";
            let badgeClass = "";

            if (gula >= 200) {
                status = "Tinggi";
                badgeClass = "bg-danger"; // Warna merah
            } else if (gula < 140) {
                status = "Normal";
                badgeClass = "bg-success"; // Warna hijau
            }else if (gula < 70) {
                status = "Rendah";
                badgeClass = "bg-warning";
            }



            // Memperbarui input readonly dan badge dengan status
            statusGulaField.value = status; // Menampilkan status di input readonly
            gulaBadge.textContent = status; // Menampilkan status di badge
            gulaBadge.className = `badge mt-1 ${badgeClass}`; // Menambahkan warna sesuai status
        } else {
            alert('Format kadar gula darah tidak valid. Gunakan format angka (misalnya: 200).');
        }
    });
</script>

<script>
    document.getElementById('hipertensi-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const tekananDarah = document.getElementById('tekananDarah').value;
    const statusDarahField = document.getElementById('statusDarah');
    const badge = document.getElementById('hipertensi-badge');

    const regex = /^(\d{1,3})\/(\d{1,3})$/;
    const match = tekananDarah.match(regex);

    if (match) {
        const sistolik = parseInt(match[1]);
        const diastolik = parseInt(match[2]);

        let status = "";
        let badgeClass = "";

        // Validasi input
        if (isNaN(sistolik) || isNaN(diastolik) || sistolik <= 60 || diastolik <= 40) {
            status = "Silakan masukkan angka yang valid dan masuk akal";
            badgeClass = "bg-secondary";
        } else {
            // Klasifikasi Tekanan Darah berdasarkan SEADOC
            if (sistolik >= 180 || diastolik >= 120) {
                status = "Hipertensi Krisis";
                badgeClass = "bg-danger";
            } else if (sistolik >= 160 || diastolik >= 100) {
                status = "Hipertensi Tingkat 2";
                badgeClass = "bg-danger";
            } else if (sistolik >= 140 || diastolik >= 90) {
                status = "Hipertensi Tingkat 1";
                badgeClass = "bg-warning";
            } else if (sistolik >= 120 || diastolik >= 80) {
                status = "Normal Tinggi (Prahipertensi)";
                badgeClass = "bg-warning";
            } else if (sistolik >= 90 && sistolik < 120 && diastolik >= 60 && diastolik < 80) {
                status = "Normal";
                badgeClass = "bg-success";
            } else {
                status = "Hipotensi";
                badgeClass = "bg-info";
            }
        }

        console.log("Sistolik:", sistolik, "Diastolik:", diastolik, "Status:", status);

        // Memperbarui field status dan badge
        statusDarahField.value = status;
        badge.textContent = status;
        badge.className = `badge mt-1 ${badgeClass}`;
    } else {
        alert('Format tekanan darah tidak valid. Gunakan format 120/80.');
    }
});

</script>

<script>
    const saveFormResultUrl = 'http://localhost:8000/save-form-result'; // Hardcode URL sementara
     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    console.log('CSRF Token:', csrfToken);

    document.addEventListener("DOMContentLoaded", function () {
    console.log("Page Loaded");

    fetch("{{ route('get-form-data') }}") // Ganti dengan URL API yang benar
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log("Data fetched:", data);
            document.getElementById('nama-akseptor').innerText = data.nama_akseptor || '';
            document.getElementById('nama-suami').innerText = data.nama_suami || '';
            document.getElementById('pendidikan-terakhir').innerText = data.pendidikan_terakhir || '';
            document.getElementById('tujuan-kb').innerText = data.tujuan_kb || '';
            document.getElementById('no-hp').innerText = data.no_hp || '';
            document.getElementById('alamat').innerText = data.alamat || '';
            localStorage.setItem('formData', JSON.stringify(data));
        })
        .catch(error => console.error("Error fetching data:", error));
});
    // Fungsi untuk menyimpan data ke localStorage
    function saveToLocalStorage(key, value) {
      let storedData = JSON.parse(localStorage.getItem('formData')) || {};
      storedData[key] = value;
      localStorage.setItem('formData', JSON.stringify(storedData));
    }

    // Menangani pemilihan kartu usia dan hamil
    document.addEventListener('DOMContentLoaded', function () {
      // Pilih semua card dengan kelas 'card-usia'
      document.querySelectorAll('.card-usia').forEach(card => {
        card.addEventListener('click', function (e) {
          e.preventDefault();

          // Hapus kelas 'selected' dari semua card
          document.querySelectorAll('.card-usia').forEach(c => c.classList.remove('selected'));

          // Tambahkan kelas 'selected' pada card yang diklik
          this.classList.add('selected');

          // Ambil nilai dari data-value card yang dipilih
          const selectedValue = this.getAttribute('data-value');
          console.log('Card usia yang dipilih:', selectedValue);

          const paragraph = document.querySelector('.card-body .value-card-1');
          paragraph.textContent = selectedValue;

          // Simpan data card usia ke localStorage
          saveToLocalStorage('selectedCardUsia', selectedValue);
        });
      });

      // Pilih semua card dengan kelas 'card-hamil'
      document.querySelectorAll('.card-hamil').forEach(card => {
        card.addEventListener('click', function (e) {
          e.preventDefault();

          // Hapus kelas 'selected' dari semua card
          document.querySelectorAll('.card-hamil').forEach(c => c.classList.remove('selected'));

          // Tambahkan kelas 'selected' pada card yang diklik
          this.classList.add('selected');

          // Ambil nilai dari data-value card yang dipilih
          const selectedValue = this.getAttribute('data-value');
          console.log('Card hamil yang dipilih:', selectedValue);

          const paragraph = document.querySelector('.card-body .value-card-2');
          paragraph.textContent = selectedValue;

          // Simpan data card hamil ke localStorage
          saveToLocalStorage('selectedCardHamil', selectedValue);
        });
      });
    });

    // Menangani data selectedCards dan arrayValue
    const selectedCards = [];

    function toggleSelect(card, cardName) {
      card.classList.toggle('selected'); // Menambahkan atau menghapus kelas 'selected'

      if (card.classList.contains('selected')) {
          selectedCards.push(cardName); // Menambahkan nama card ke array jika dipilih
      } else {
          const index = selectedCards.indexOf(cardName);
          if (index > -1) {
              selectedCards.splice(index, 1); // Menghapus nama card dari array jika tidak dipilih
          }
      }

      // Gabungkan semua pilihan yang dipilih dan tampilkan di paragraph
      const paragraph = document.querySelector('.card-body .value-card-3');
      if (paragraph) {
          paragraph.textContent = selectedCards.join(', '); // Gabungkan dengan koma
      }

      // Simpan selectedCards ke localStorage
      saveToLocalStorage('selectedCards', selectedCards);

      checkSelection(); // Memeriksa kombinasi yang dipilih dan menampilkan rekomendasi
    }

    function checkSelection() {
      const uniqueSelections = [...new Set(selectedCards)]; // Hapus duplikasi
      let arrayValue = []; // Array untuk rekomendasi

      // Elemen DOM untuk rekomendasi
      const kondom = document.getElementById('contentKondom');
      const senggama = document.getElementById('contentSenggamaPutus');
      const pilKb = document.getElementById('contentPilKb');
      const iud = document.getElementById('contentIud');
      const implan = document.getElementById('contenImplan');
      const suntik = document.getElementById('contenSuntik');
      const steril = document.getElementById('contentSteril');

      // Sembunyikan semua rekomendasi terlebih dahulu
      if (kondom) kondom.style.display = 'none';
      if (senggama) senggama.style.display = 'none';
      if (pilKb) pilKb.style.display = 'none';
      if (iud) iud.style.display = 'none';
      if (implan) implan.style.display = 'none';
      if (suntik) suntik.style.display = 'none';
      if (steril) steril.style.display = 'none';

    const storedData = JSON.parse(localStorage.getItem('formData'));
    console.log("ini data local", storedData.selectedCardHamil);

    if (storedData.selectedCardUsia == 'Usia Kurang Dari 20 Tahun' || storedData.selectedCardUsia == 'Usia 20-35 Tahun') {

            if (uniqueSelections.length === 0) {
                arrayValue = [];
            } else if (uniqueSelections.length === 1) {
                const selection = uniqueSelections[0];
                if (selection === 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN') {
                    arrayValue = ['kondom', 'suntik', 'implan', 'iud'];
                } else if (selection === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)') {
                    arrayValue = ['kondom', 'iud'];
                } else if (selection === 'OBESITAS IMT >27') {
                    arrayValue = ['kondom', 'iud'];
                } else if (selection === 'RIWAYAT PENYAKIT IMS DAN HIV') {
                    arrayValue = ['kondom'];
                } else if (selection === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') {
                    arrayValue = ['kondom', 'iud'];
                }
            } else if (uniqueSelections.length === 2) {
                const [first, second] = uniqueSelections;
                if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'OBESITAS IMT >27') ||
                    (first === 'OBESITAS IMT >27' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'iud'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'iud'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom', 'iud'];
                } else if ((first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA' && second === 'RIWAYAT PENYAKIT IMS DAN HIV')) {
                    arrayValue = ['kondom'];
                }
            }

    }else if(storedData.selectedCardUsia == 'Usia Lebih Dari 35 Tahun'){
            if (uniqueSelections.length === 0) {
                arrayValue = [];
            } else if (uniqueSelections.length === 1) {
                const selection = uniqueSelections[0];
                if (selection === 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN') {
                    arrayValue = ['kondom', 'senggama putus', 'pilKb',];
                } else if (selection === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)') {
                    arrayValue = ['kondom', 'iud', 'steril'];
                } else if (selection === 'OBESITAS IMT >27') {
                    arrayValue = ['kondom', 'iud', 'steril'];
                } else if (selection === 'RIWAYAT PENYAKIT IMS DAN HIV') {
                    arrayValue = ['kondom'];
                } else if (selection === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') {
                    arrayValue = ['kondom', 'iud', 'steril'];
                }
            } else if (uniqueSelections.length === 2) {
                const [first, second] = uniqueSelections;
                if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'OBESITAS IMT >27') ||
                    (first === 'OBESITAS IMT >27' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'iud', 'steril'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'iud', 'steril'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom', 'iud', 'steril'];
                } else if ((first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JANTUNG, DIABETES, ASMA' && second === 'RIWAYAT PENYAKIT IMS DAN HIV')) {
                    arrayValue = ['kondom'];
                }
            }
    }



      // Tampilkan elemen berdasarkan arrayValue
      if (arrayValue.includes('kondom') && kondom) {
          kondom.style.display = 'block';
        }
      if (arrayValue.includes('senggama putus') && senggama) {
          senggama.style.display = 'block';
        }
      if (arrayValue.includes('pilKb') && pilKb) {
          pilKb.style.display = 'block';
        }
      if (arrayValue.includes('iud') && iud) {
          iud.style.display = 'block';
        }
      if (arrayValue.includes('implan') && implan) {
            implan.style.display = 'block';
        }
      if (arrayValue.includes('suntik') && suntik) {
            suntik.style.display = 'block';
        }
      if (arrayValue.includes('steril') && steril) {
                steril.style.display = 'block';
        }

      // Simpan arrayValue ke localStorage
      saveToLocalStorage('arrayValue', arrayValue);

      console.log(arrayValue); // Debug: Tampilkan arrayValue
    }

    // Ambil data saat halaman dimuat
    window.addEventListener('load', function() {
      loadFromLocalStorage();
    });

    // Fungsi untuk mengambil data dari localStorage dan menampilkan di form
    function loadFromLocalStorage() {
      const storedData = JSON.parse(localStorage.getItem('formData'));
      if (storedData) {
        // Update elemen form dengan data dari localStorage
        document.getElementById('nama-akseptor').innerText = storedData.nama_akseptor || '';
        document.getElementById('nama-suami').innerText = storedData.nama_suami || '';
        document.getElementById('pendidikan-terakhir').innerText = storedData.pendidikan_terakhir || '';
        document.getElementById('tujuan-kb').innerText = storedData.tujuan_kb || '';
        document.getElementById('no-hp').innerText = storedData.no_hp || '';
        document.getElementById('alamat').innerText = storedData.alamat || '';
        document.querySelector('.card-body .value-card-1').textContent = selectedCard1;
        document.querySelector('.card-body .value-card-2').textContent = selectedCard2;
        checkSelection();
      }
    }
  </script>



@endsection
