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
            <div class="row mx-auto">
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch card-hover card-container animate__animated animate__fadeInUp">
                    <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm">
                    <div class="card w-100 card-hover card-hamil" data-value="Belum Pernah Hamil">
                    <div class="p-4 d-flex align-items-stretch h-100">
                      <div class="row">
                        <div class="col-4 col-md-3 d-flex align-items-center">
                          <img src="{{ asset('assets/images/gadis.png') }}" class="rounded img-fluid" />
                        </div>
                        <div class="col-8 col-md-9 d-flex align-items-center">
                          <div>
                            Belum Pernah Hamil
                          </div>
                        </div>
                      </div>
                    </div>
                </a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 d-flex align-items-stretch card-hover card-container animate__animated animate__fadeInDown">
                    <a href="javascript:void(0)" class="text-dark fs-4 link lh-sm">
                    <div class="card w-100 card-hover card-hamil" data-value="Sudah Pernah Hamil">
                      <div class="p-4 d-flex align-items-stretch h-100">
                        <div class="row">
                          <div class="col-4 col-md-3 d-flex align-items-center">
                            <img src="{{ asset('assets/images/ibuk-anak.png') }}" class="rounded img-fluid" />
                          </div>
                          <div class="col-8 col-md-9 d-flex align-items-center">
                            <div>
                              Sudah Pernah Hamil
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </a>
                  </div>
          </div>
        </section>
        <!-- Step 3 -->
        <h6>Step 3</h6>
        <section>
            <div class="row">
                <div class="col-md-6 col-lg-6" id="card1">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">1</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6" id="card2">
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
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 card-hover" id="card3">
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
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 card-hover" id="card4">
                    <div class="card card-style card-riwayat rounded-3 h-70 mt-2 form-control required card-container animate__animated animate__fadeInDown" onclick="toggleSelect(this, 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA')">
                        <a href="#" class="stretched-link"></a>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <span class="circle-bg">
                                    <h6 class="number-text mt-2">4</h6>
                                </span>
                                <div class="ms-3">
                                    <h6 class="card-title text-dark mb-0 text-truncate" style="max-width: 200px;">RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA</h6>
                                </div>
                            </div>
                        </div>
                    </div>
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
        <!-- Step 4 -->
        <h6>Step 4</h6>
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
                                <div class="collapse show multi-collapse mt-2" id="multiCollapseExample1" id="contentKondom">
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
                                <div class="collapse show multi-collapse mt-2" id="multiCollapseExample2" id="contentSenggamaPutus">
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
                                                    <img src="{{ asset('assets/images/senggama-putus.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
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
                                <div class="collapse show multi-collapse mt-2" id="multiCollapseExample3" id="contentPilKb">
                                    <div class="card card-body">
                                        <h5 class="text-danger">Harus diperhatikan!</h5>
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
                                                    <img src="{{ asset('assets/images/senggama-putus.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
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
                                <div class="collapse show multi-collapse mt-2" id="multiCollapseExample4" id="contentIud">
                                    <div class="card card-body">
                                        <h5 class="text-danger">Harus dipverhatikan!</h5>
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
                                                    <img src="{{ asset('assets/images/senggama-putus.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
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
                                <div class="collapse show multi-collapse mt-5" id="multiCollapseExample5" id="contenImplan">
                                    <div class="card card-body">
                                        <h5 class="text-danger">Harus dipverhatikan!</h5>
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
                                                    <img src="{{ asset('assets/images/senggama-putus.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
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
                                <div class="collapse show multi-collapse mt-2" id="multiCollapseExample6" id="contenSuntik">
                                    <div class="card card-body">
                                        <h5 class="text-danger">JARAK WAKTU PEMAKAIAN YANG PERLU DIPERHATIKAN !</h5>
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
                                                    <img src="{{ asset('assets/images/senggama-putus.png') }}" class="rounded img-fluid" style="width: 100px; height: 40px; object-fit: cover;" />
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
                                <div class="collapse show multi-collapse mt-2" id="multiCollapseExample7" id="contentSteril">
                                    <div class="card card-body">
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
                        </div>
                        <div class="col-md-12 col-12 card">
                            <div class="card-body">
                                <h5 class="text-success">Kesimpulan</h5>
                                <p>Setelah membaca rekomendasi di atas, Anda dapat memilih metode KB yang sesuai dengan kebutuhan dan kondisi kesehatan Anda. Jika Anda masih ragu, konsultasikan dengan dokter atau bidan untuk mendapatkan saran yang lebih spesifik.</p>
                                  <a href="http://wa.link/752ysq" class="btn btn-success">Hubungi Kami!</a>
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

<script>
    const saveFormResultUrl = 'http://localhost:8000/save-form-result'; // Hardcode URL sementara
     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    console.log('CSRF Token:', csrfToken);

   document.addEventListener("DOMContentLoaded", function () {
    fetch("{{ route('get-form-data') }}")
        .then((response) => response.json())
        .then((data) => {
            console.log("Data fetched:", data);

            // Perbarui elemen dengan data
            document.getElementById('nama-akseptor').innerText = data.nama_akseptor || '';
            document.getElementById('nama-suami').innerText = data.nama_suami || '';
            document.getElementById('pendidikan-terakhir').innerText = data.pendidikan_terakhir || '';
            document.getElementById('tujuan-kb').innerText = data.tujuan_kb || '';
            document.getElementById('no-hp').innerText = data.no_hp || '';
            document.getElementById('alamat').innerText = data.alamat || '';
            saveToLocalStorage('formData', data);
        })
        .catch((error) => console.error("Error fetching data:", error));
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
        if(storedData.selectedCardHamil == 'Belum Pernah Hamil'){
            if (uniqueSelections.length === 0) {
                arrayValue = [];
            } else if (uniqueSelections.length === 1) {
                const selection = uniqueSelections[0];
                if (selection === 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN') {
                    arrayValue = ['kondom', 'senggama putus', 'pilKb',];
                } else if (selection === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)') {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if (selection === 'OBESITAS IMT >27') {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if (selection === 'RIWAYAT PENYAKIT IMS DAN HIV') {
                    arrayValue = ['kondom'];
                } else if (selection === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') {
                    arrayValue = ['kondom', 'senggama putus'];
                }
            } else if (uniqueSelections.length === 2) {
                const [first, second] = uniqueSelections;
                if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'OBESITAS IMT >27') ||
                    (first === 'OBESITAS IMT >27' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if ((first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT PENYAKIT IMS DAN HIV')) {
                    arrayValue = ['kondom'];
                }
            }
        }else if(storedData.selectedCardHamil == 'Sudah Pernah Hamil'){
            if (uniqueSelections.length === 0) {
                arrayValue = [];
            } else if (uniqueSelections.length === 1) {
                const selection = uniqueSelections[0];
                if (selection === 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN') {
                    arrayValue = ['kondom', 'senggama putus', 'pilKb','iud','implan','suntik'];
                } else if (selection === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)') {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if (selection === 'OBESITAS IMT >27') {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if (selection === 'RIWAYAT PENYAKIT IMS DAN HIV') {
                    arrayValue = ['kondom'];
                } else if (selection === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                }
            } else if (uniqueSelections.length === 2) {
                const [first, second] = uniqueSelections;
                if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'OBESITAS IMT >27') ||
                    (first === 'OBESITAS IMT >27' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if ((first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT PENYAKIT IMS DAN HIV')) {
                    arrayValue = ['kondom'];
                }
            }
        }
    }else if(storedData.selectedCardUsia == 'Usia Lebih Dari 35 Tahun'){
        if(storedData.selectedCardHamil == 'Belum Pernah Hamil'){
            if (uniqueSelections.length === 0) {
                arrayValue = [];
            } else if (uniqueSelections.length === 1) {
                const selection = uniqueSelections[0];
                if (selection === 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN') {
                    arrayValue = ['kondom', 'senggama putus', 'pilKb',];
                } else if (selection === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)') {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if (selection === 'OBESITAS IMT >27') {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if (selection === 'RIWAYAT PENYAKIT IMS DAN HIV') {
                    arrayValue = ['kondom'];
                } else if (selection === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') {
                    arrayValue = ['kondom', 'senggama putus'];
                }
            } else if (uniqueSelections.length === 2) {
                const [first, second] = uniqueSelections;
                if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'OBESITAS IMT >27') ||
                    (first === 'OBESITAS IMT >27' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom', 'senggama putus'];
                } else if ((first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT PENYAKIT IMS DAN HIV')) {
                    arrayValue = ['kondom'];
                }
            }
        }else if (storedData.selectedCardHamil == 'Sudah Pernah Hamil'){
            if (uniqueSelections.length === 0) {
                arrayValue = [];
            } else if (uniqueSelections.length === 1) {
                const selection = uniqueSelections[0];
                if (selection === 'SEHAT DAN TIDAK ADA RIWAYAT PENYAKIT APAPUN') {
                    arrayValue = ['kondom', 'senggama putus', 'pilKb','iud','implan','suntik','steril'];
                } else if (selection === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)') {
                    arrayValue = ['kondom', 'senggama putus','iud','steril'];
                } else if (selection === 'OBESITAS IMT >27') {
                    arrayValue = ['kondom', 'senggama putus','steril'];
                } else if (selection === 'RIWAYAT PENYAKIT IMS DAN HIV') {
                    arrayValue = ['kondom'];
                } else if (selection === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') {
                    arrayValue = ['kondom', 'senggama putus','steril'];
                }
            } else if (uniqueSelections.length === 2) {
                const [first, second] = uniqueSelections;
                if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'OBESITAS IMT >27') ||
                    (first === 'OBESITAS IMT >27' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT TEKANAN DARAH TINGGI ATAU HIPERTENSI (>140/90)')) {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT IMS DAN HIV') ||
                            (first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom'];
                } else if ((first === 'OBESITAS IMT >27' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'OBESITAS IMT >27')) {
                    arrayValue = ['kondom', 'senggama putus','iud'];
                } else if ((first === 'RIWAYAT PENYAKIT IMS DAN HIV' && second === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA') ||
                            (first === 'RIWAYAT PENYAKIT JATUNG, DIABETES, ASMA' && second === 'RIWAYAT PENYAKIT IMS DAN HIV')) {
                    arrayValue = ['kondom'];
                }
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
