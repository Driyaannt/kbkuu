@extends('layouts.app')

@section('content')
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
<style>
.card-hover.active {
    border: 2px solid #0d6efd;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.chart-item {
    margin-bottom: 20px; /* Memberikan jarak antar chart */
}

.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan pada card */
    border: 1px solid #e0e0e0; /* Menambahkan border tipis pada card */
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 1.2rem;
    margin-bottom: 10px;
}


</style>

<div class="row mt-3">
    <div class="col-md-6 col-lg-4">
      <div class="card rounded-3 card-hover"  id="cardDataTable" data-target="dataTableWrapper">
        <a href="#" class="stretched-link"></a>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <span class="flex-shrink-0 mt-1"><box-icon name='dashboard' type='solid' color='#ffccd5' ></box-icon></span>
            <div class="ms-4">
              <h4 class="card-title text-dark mt-2">Dashboard</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card rounded-3 card-hover" id="cardDataTable1" data-target="dataTable1Wrapper" onclick="switchTable(this)">
            <a href="#" class="stretched-link"></a>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="flex-shrink-0"><box-icon type='solid'color='#ffccd5' name='objects-vertical-bottom'></box-icon></span>
                    <div class="ms-4">
                        <h4 class="card-title text-dark mt-2">Data Report Hasil</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card rounded-3 card-hover" id="cardDataTable2" data-target="dataTable2Wrapper" onclick="switchTable(this)">
            <a href="#" class="stretched-link"></a>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="flex-shrink-0"><box-icon name='receipt' type='solid'color='#ffccd5'></box-icon></span>
                    <div class="ms-4">
                        <h4 class="card-title text-dark mt-2">Data (Pretest) Kuisioner 1</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="card rounded-3 card-hover" id="cardDataTable3" data-target="dataTable3Wrapper" onclick="switchTable(this)">
            <a href="#" class="stretched-link"></a>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="flex-shrink-0"><box-icon name='file' type='solid' color='#ffccd5' ></box-icon></span>
                    <div class="ms-4">
                        <h4 class="card-title text-dark mt-2">Data (Posttest) Kuisioner 1</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card rounded-3 card-hover" id="cardDataTable4" data-target="dataTable4Wrapper" onclick="switchTable(this)">
            <a href="#" class="stretched-link"></a>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="flex-shrink-0"><box-icon name='receipt' type='solid'color='#ffccd5'></box-icon></span>
                    <div class="ms-4">
                        <h4 class="card-title text-dark mt-2">Data (Pretest) Kuisioner 2</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <div class="card rounded-3 card-hover" id="cardDataTable5" data-target="dataTable5Wrapper" onclick="switchTable(this)">
            <a href="#" class="stretched-link"></a>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <span class="flex-shrink-0"><box-icon name='file' type='solid' color='#ffccd5' ></box-icon></span>
                    <div class="ms-4">
                        <h4 class="card-title text-dark mt-2">Data (Posttest) Kuisioner 2</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-6 col-lg-4">
      <div class="card rounded-3 card-hover">
        <a href="#" class="stretched-link"></a>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <span class="flex-shrink-0"><i class="ti ti-folder-down text-danger display-6"></i></span>
            <div class="ms-4">
              <h4 class="card-title text-dark">My Folder</h4>
              <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                2.4GB Junk File
              </h6>
              <span class="fs-2 mt-1 ">Folder: 45 Items: 78 Used: 3.6GB</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card rounded-3 card-hover">
        <a href="#" class="stretched-link"></a>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <span class="flex-shrink-0"><i class="ti ti-download text-secondary display-6"></i></span>
            <div class="ms-4">
              <h4 class="card-title text-dark">My Downloads</h4>
              <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                2.4GB Junk File
              </h6>
              <span class="fs-2 mt-1 ">Folder: 45 Items: 78 Used: 3.6GB</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card rounded-3 card-hover">
        <a href="#" class="stretched-link"></a>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <span class="flex-shrink-0"><i class="ti ti-folder-star text-primary display-6"></i></span>
            <div class="ms-4">
              <h4 class="card-title text-dark">Office Work</h4>
              <h6 class="card-subtitle mb-0 fs-2 fw-normal mb-1">
                2.4GB Junk File
              </h6>
              <span class="fs-2 mt-1 ">Folder: 4 Items: 4800 Used: 2.6GB</span>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>

  <div class="card" style="background-color: #FFCCD5; height:20px; border-radius:20px;"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0">Data Report</h5>
                </div>

                <!-- Manual Filter -->
                {{-- <div class="mb-3">
                    <div class="row">
                        <div class="col-md-2">
                            <input type="text" id="filter_id" class="form-control" placeholder="Filter ID">
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="filter_nama_akseptor" class="form-control" placeholder="Filter Nama Akseptor">
                        </div>
                        <!-- Add more filters as needed -->
                    </div>
                </div> --}}

                <div class="table-responsive" id="dataTable1Wrapper" style="display: none;">
                    <table id="dataTable1" class="table table-hover table-striped table-bordered display nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama Akseptor</th>
                                <th>Nama Suami</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Tujuan KB</th>
                                <th>No. HP</th>
                                <th>Alamat</th>
                                <th>Section</th>
                                <th>Pregnancy Status</th>
                                <th>Age Category</th>
                                <th>Medical History</th>
                                <th>Recommended Methods</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama_akseptor }}</td>
                                <td>{{ $row->nama_suami }}</td>
                                <td>{{ $row->pendidikan_terakhir }}</td>
                                <td>{{ $row->tujuan_kb }}</td>
                                <td>{{ $row->no_hp }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td>{{ $row->section }}</td>
                                <td>{{ $row->pregnancy_status }}</td>
                                <td>{{ $row->age_category }}</td>
                                <td>{{ $row->medical_history }}</td>
                                <td>{{ $row->recommended_methods }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="dataTable2Wrapper" style="display: none;">
                    <label class="mb-2">Data Pre-Test 1</label>
                    <table id="dataTable2" class="table table-hover table-striped table-bordered display nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Jumlah Anak</th>
                                <th>Pengetahuan 1</th>
                                <th>Pengetahuan 2</th>
                                <th>Pengetahuan 3</th>
                                <th>Pengetahuan 4</th>
                                <th>Pengetahuan 5</th>
                                <th>Pengetahuan 6</th>
                                <th>Pengetahuan 7</th>
                                <th>Pengetahuan (%)</th>
                                <th>Pengetahuan Kategori</th>
                                <th>Sikap 1</th>
                                <th>Sikap 2</th>
                                <th>Sikap 3</th>
                                <th>Sikap 4</th>
                                <th>Sikap 5</th>
                                <th>Sikap 6</th>
                                <th>Point Sikap</th>
                                <th>Sikap Kategori</th>
                                <th>Tindakan 1</th>
                                <th>Tindakan 2</th>
                                <th>Tindakan 3</th>
                                <th>Tindakan 4</th>
                                <th>Tindakan 5</th>
                                <th>Tindakan 6</th>
                                <th>Tindakan 7</th>
                                <th>Tindakan 8</th>
                                <th>Tindakan 9</th>
                                <th>Tindakan 10</th>
                                <th>Tindakan (%)</th>
                                <th>Tindakan Kategori</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kuisioners as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->usia }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->pendidikan }}</td>
                                <td>{{ $row->pekerjaan }}</td>
                                <td>{{ $row->jumlah_anak }}</td>
                                <td>{{ $row->kb1 }}</td>
                                <td>{{ $row->kb2 }}</td>
                                <td>{{ $row->kb3 }}</td>
                                <td>{{ $row->kb4 }}</td>
                                <td>{{ $row->kb5 }}</td>
                                <td>{{ $row->kb6 }}</td>
                                <td>{{ $row->kb7 }}</td>
                                <td>{{ $row->pengetahuan_percentage }}%</td>
                                <td>{{ $row->pengetahuan_kategori }}</td>
                                <td>{{ $row->q1 }}</td>
                                <td>{{ $row->q2 }}</td>
                                <td>{{ $row->q3 }}</td>
                                <td>{{ $row->q4 }}</td>
                                <td>{{ $row->q5 }}</td>
                                <td>{{ $row->q6 }}</td>
                                <td>{{ $row->sikap_percentage }}</td>
                                <td>{{ $row->sikap_kategori }}</td>
                                <td>{{ $row->action1 }}</td>
                                <td>{{ $row->action2 }}</td>
                                <td>{{ $row->action3 }}</td>
                                <td>{{ $row->action4 }}</td>
                                <td>{{ $row->action5 }}</td>
                                <td>{{ $row->action6 }}</td>
                                <td>{{ $row->action7 }}</td>
                                <td>{{ $row->action8 }}</td>
                                <td>{{ $row->action9 }}</td>
                                <td>{{ $row->action10 }}</td>
                                <td>{{ $row->tindakan_percentage }}%</td>
                                <td>{{ $row->tindakan_kategori }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="dataTable3Wrapper" style="display: none;">
                    <label class="mb-2">Data Post-Test 1</label>
                    <table id="dataTable3" class="table table-hover table-striped table-bordered display nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Jumlah Anak</th>
                                <th>Pengetahuan 1</th>
                                <th>Pengetahuan 2</th>
                                <th>Pengetahuan 3</th>
                                <th>Pengetahuan 4</th>
                                <th>Pengetahuan 5</th>
                                <th>Pengetahuan 6</th>
                                <th>Pengetahuan 7</th>
                                <th>Pengetahuan (%)</th>
                                <th>Pengetahuan Kategori</th>
                                <th>Sikap 1</th>
                                <th>Sikap 2</th>
                                <th>Sikap 3</th>
                                <th>Sikap 4</th>
                                <th>Sikap 5</th>
                                <th>Sikap 6</th>
                                <th>Point Sikap</th>
                                <th>Sikap Kategori</th>
                                <th>Tindakan 1</th>
                                <th>Tindakan 2</th>
                                <th>Tindakan 3</th>
                                <th>Tindakan 4</th>
                                <th>Tindakan 5</th>
                                <th>Tindakan 6</th>
                                <th>Tindakan 7</th>
                                <th>Tindakan 8</th>
                                <th>Tindakan 9</th>
                                <th>Tindakan 10</th>
                                <th>Tindakan (%)</th>
                                <th>Tindakan Kategori</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($postTestKuisioners as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->usia }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->pendidikan }}</td>
                                <td>{{ $row->pekerjaan }}</td>
                                <td>{{ $row->jumlah_anak }}</td>
                                <td>{{ $row->kb1 }}</td>
                                <td>{{ $row->kb2 }}</td>
                                <td>{{ $row->kb3 }}</td>
                                <td>{{ $row->kb4 }}</td>
                                <td>{{ $row->kb5 }}</td>
                                <td>{{ $row->kb6 }}</td>
                                <td>{{ $row->kb7 }}</td>
                                <td>{{ $row->pengetahuan_percentage }}%</td>
                                <td>{{ $row->pengetahuan_kategori }}</td>
                                <td>{{ $row->q1 }}</td>
                                <td>{{ $row->q2 }}</td>
                                <td>{{ $row->q3 }}</td>
                                <td>{{ $row->q4 }}</td>
                                <td>{{ $row->q5 }}</td>
                                <td>{{ $row->q6 }}</td>
                                <td>{{ $row->sikap_percentage }}</td>
                                <td>{{ $row->sikap_kategori }}</td>
                                <td>{{ $row->action1 }}</td>
                                <td>{{ $row->action2 }}</td>
                                <td>{{ $row->action3 }}</td>
                                <td>{{ $row->action4 }}</td>
                                <td>{{ $row->action5 }}</td>
                                <td>{{ $row->action6 }}</td>
                                <td>{{ $row->action7 }}</td>
                                <td>{{ $row->action8 }}</td>
                                <td>{{ $row->action9 }}</td>
                                <td>{{ $row->action10 }}</td>
                                <td>{{ $row->tindakan_percentage }}%</td>
                                <td>{{ $row->tindakan_kategori }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive" id="dataTable4Wrapper" style="display: none;">
                    <label class="mb-2">Data Pre-Test 2</label>
                    <table id="dataTable4" class="table table-hover table-striped table-bordered display nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Jumlah Anak</th>
                                <th>Pengetahuan 1</th>
                                <th>Pengetahuan 2</th>
                                <th>Pengetahuan 3</th>
                                <th>Pengetahuan 4</th>
                                <th>Pengetahuan 5</th>
                                <th>Pengetahuan 6</th>
                                <th>Pengetahuan 7</th>
                                <th>Pengetahuan (%)</th>
                                <th>Pengetahuan Kategori</th>
                                <th>Sikap 1</th>
                                <th>Sikap 2</th>
                                <th>Sikap 3</th>
                                <th>Sikap 4</th>
                                <th>Sikap 5</th>
                                <th>Sikap 6</th>
                                <th>Point Sikap</th>
                                <th>Sikap Kategori</th>
                                <th>Tindakan 1</th>
                                <th>Tindakan 2</th>
                                <th>Tindakan 3</th>
                                <th>Tindakan 4</th>
                                <th>Tindakan 5</th>
                                <th>Tindakan 6</th>
                                <th>Tindakan 7</th>
                                <th>Tindakan 8</th>
                                <th>Tindakan 9</th>
                                <th>Tindakan 10</th>
                                <th>Tindakan (%)</th>
                                <th>Tindakan Kategori</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kuisioners2 as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->usia }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->pendidikan }}</td>
                                <td>{{ $row->pekerjaan }}</td>
                                <td>{{ $row->jumlah_anak }}</td>
                                <td>{{ $row->kb1 }}</td>
                                <td>{{ $row->kb2 }}</td>
                                <td>{{ $row->kb3 }}</td>
                                <td>{{ $row->kb4 }}</td>
                                <td>{{ $row->kb5 }}</td>
                                <td>{{ $row->kb6 }}</td>
                                <td>{{ $row->kb7 }}</td>
                                <td>{{ $row->pengetahuan_percentage }}%</td>
                                <td>{{ $row->pengetahuan_kategori }}</td>
                                <td>{{ $row->q1 }}</td>
                                <td>{{ $row->q2 }}</td>
                                <td>{{ $row->q3 }}</td>
                                <td>{{ $row->q4 }}</td>
                                <td>{{ $row->q5 }}</td>
                                <td>{{ $row->q6 }}</td>
                                <td>{{ $row->sikap_percentage }}</td>
                                <td>{{ $row->sikap_kategori }}</td>
                                <td>{{ $row->action1 }}</td>
                                <td>{{ $row->action2 }}</td>
                                <td>{{ $row->action3 }}</td>
                                <td>{{ $row->action4 }}</td>
                                <td>{{ $row->action5 }}</td>
                                <td>{{ $row->action6 }}</td>
                                <td>{{ $row->action7 }}</td>
                                <td>{{ $row->action8 }}</td>
                                <td>{{ $row->action9 }}</td>
                                <td>{{ $row->action10 }}</td>
                                <td>{{ $row->tindakan_percentage }}%</td>
                                <td>{{ $row->tindakan_kategori }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive" id="dataTable5Wrapper" style="display: none;">
                    <label class="mb-2">Data Post-Test 2</label>
                    <table id="dataTable5" class="table table-hover table-striped table-bordered display nowrap w-100">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Usia</th>
                                <th>Jenis Kelamin</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Jumlah Anak</th>
                                <th>Pengetahuan 1</th>
                                <th>Pengetahuan 2</th>
                                <th>Pengetahuan 3</th>
                                <th>Pengetahuan 4</th>
                                <th>Pengetahuan 5</th>
                                <th>Pengetahuan 6</th>
                                <th>Pengetahuan 7</th>
                                <th>Pengetahuan (%)</th>
                                <th>Pengetahuan Kategori</th>
                                <th>Sikap 1</th>
                                <th>Sikap 2</th>
                                <th>Sikap 3</th>
                                <th>Sikap 4</th>
                                <th>Sikap 5</th>
                                <th>Sikap 6</th>
                                <th>Point Sikap</th>
                                <th>Sikap Kategori</th>
                                <th>Tindakan 1</th>
                                <th>Tindakan 2</th>
                                <th>Tindakan 3</th>
                                <th>Tindakan 4</th>
                                <th>Tindakan 5</th>
                                <th>Tindakan 6</th>
                                <th>Tindakan 7</th>
                                <th>Tindakan 8</th>
                                <th>Tindakan 9</th>
                                <th>Tindakan 10</th>
                                <th>Tindakan (%)</th>
                                <th>Tindakan Kategori</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($postTestKuisioners2 as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>{{ $row->usia }}</td>
                                <td>{{ $row->jenis_kelamin }}</td>
                                <td>{{ $row->pendidikan }}</td>
                                <td>{{ $row->pekerjaan }}</td>
                                <td>{{ $row->jumlah_anak }}</td>
                                <td>{{ $row->kb1 }}</td>
                                <td>{{ $row->kb2 }}</td>
                                <td>{{ $row->kb3 }}</td>
                                <td>{{ $row->kb4 }}</td>
                                <td>{{ $row->kb5 }}</td>
                                <td>{{ $row->kb6 }}</td>
                                <td>{{ $row->kb7 }}</td>
                                <td>{{ $row->pengetahuan_percentage }}%</td>
                                <td>{{ $row->pengetahuan_kategori }}</td>
                                <td>{{ $row->q1 }}</td>
                                <td>{{ $row->q2 }}</td>
                                <td>{{ $row->q3 }}</td>
                                <td>{{ $row->q4 }}</td>
                                <td>{{ $row->q5 }}</td>
                                <td>{{ $row->q6 }}</td>
                                <td>{{ $row->sikap_percentage }}</td>
                                <td>{{ $row->sikap_kategori }}</td>
                                <td>{{ $row->action1 }}</td>
                                <td>{{ $row->action2 }}</td>
                                <td>{{ $row->action3 }}</td>
                                <td>{{ $row->action4 }}</td>
                                <td>{{ $row->action5 }}</td>
                                <td>{{ $row->action6 }}</td>
                                <td>{{ $row->action7 }}</td>
                                <td>{{ $row->action8 }}</td>
                                <td>{{ $row->action9 }}</td>
                                <td>{{ $row->action10 }}</td>
                                <td>{{ $row->tindakan_percentage }}%</td>
                                <td>{{ $row->tindakan_kategori }}</td>
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="chart-container" id="chartContainer" style="display: none">
                    <div class="row">
                        <!-- Chart Berdasarkan Pregnancy Status -->
                        <div class="col-md-6 col-lg-6">
                            <div class="chart-item card">
                                <div class="card-body">
                                    <h3 class="card-title">Chart Berdasarkan Pregnancy Status</h3>
                                    <canvas id="pregnancyChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Berdasarkan Age Category -->
                        <div class="col-md-6 col-lg-6">
                            <div class="chart-item card">
                                <div class="card-body">
                                    <h3 class="card-title">Chart Berdasarkan Age Category</h3>
                                    <canvas id="ageCategoryChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Berdasarkan Section -->
                        <div class="col-md-6 col-lg-6">
                            <div class="chart-item card">
                                <div class="card-body">
                                    <h3 class="card-title">Chart Berdasarkan Section</h3>
                                    <canvas id="sectionChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Rekomendasi KB Berdasarkan Tahun -->
                        <div class="col-md-6 col-lg-6">
                            <div class="chart-item card">
                                <div class="card-body">
                                    <h3 class="card-title">Rekomendasi KB Berdasarkan Tahun</h3>
                                    <canvas id="recommendedByYearChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
        $(document).ready(function () {
        // Saat halaman dimuat pertama kali, aktifkan kartu Dashboard
        $('#cardDataTable').addClass('active');  // Menambahkan kelas active pada kartu pertama

        // Ketika klik pada cardDataTable, tampilkan chart
        $('#cardDataTable').on('click', function () {
            $('#chartContainer').show();
            $(this).addClass('active').siblings().removeClass('active');
        });

        // Untuk kartu lainnya, sembunyikan chart
        $('#cardDataTable1').on('click', function () {

            $('#chartContainer').hide();
            $(this).addClass('active').siblings().removeClass('active');
        });

        $('#cardDataTable2').on('click', function () {
            $('#chartContainer').hide();
            $(this).addClass('active').siblings().removeClass('active');
        });

        $('#cardDataTable3').on('click', function () {
            $('#chartContainer').hide();
            $(this).addClass('active').siblings().removeClass('active');
        });

        // Inisialisasi DataTable 1
        $('#dataTable1').DataTable({
            dom: '<"d-flex justify-content-between"lfB>rtip',
            buttons: [
                { extend: 'copy', className: 'btn btn-primary btn-sm', text: '<i class="fas fa-copy me-1"></i> Copy' },
                { extend: 'csv', className: 'btn btn-success btn-sm', text: '<i class="fas fa-file-csv me-1"></i> CSV' },
                { extend: 'excel', className: 'btn btn-warning btn-sm', text: '<i class="fas fa-file-excel me-1"></i> Excel' },
                { extend: 'pdf', className: 'btn btn-danger btn-sm', text: '<i class="fas fa-file-pdf me-1"></i> PDF' },
                { extend: 'print', className: 'btn btn-info btn-sm', text: '<i class="fas fa-print me-1"></i> Print' }
            ],
            scrollX: true,
            scrollY: '400px',
            responsive: true,
            paging: true,
            searching: true,
            info: true
        });

        // Inisialisasi DataTable 2
        $('#dataTable2').DataTable({
            dom: '<"d-flex justify-content-between"lfB>rtip',
            buttons: [
                { extend: 'copy', className: 'btn btn-primary btn-sm', text: '<i class="fas fa-copy me-1"></i> Copy' },
                { extend: 'csv', className: 'btn btn-success btn-sm', text: '<i class="fas fa-file-csv me-1"></i> CSV' },
                { extend: 'excel', className: 'btn btn-warning btn-sm', text: '<i class="fas fa-file-excel me-1"></i> Excel' },
                { extend: 'pdf', className: 'btn btn-danger btn-sm', text: '<i class="fas fa-file-pdf me-1"></i> PDF' },
                { extend: 'print', className: 'btn btn-info btn-sm', text: '<i class="fas fa-print me-1"></i> Print' }
            ],
            scrollX: true,
            scrollY: '400px',
            responsive: true,
            paging: true,
            searching: true,
            info: true
        });

        $('#dataTable3').DataTable({
            dom: '<"d-flex justify-content-between"lfB>rtip',
            buttons: [
                { extend: 'copy', className: 'btn btn-primary btn-sm', text: '<i class="fas fa-copy me-1"></i> Copy' },
                { extend: 'csv', className: 'btn btn-success btn-sm', text: '<i class="fas fa-file-csv me-1"></i> CSV' },
                { extend: 'excel', className: 'btn btn-warning btn-sm', text: '<i class="fas fa-file-excel me-1"></i> Excel' },
                { extend: 'pdf', className: 'btn btn-danger btn-sm', text: '<i class="fas fa-file-pdf me-1"></i> PDF' },
                { extend: 'print', className: 'btn btn-info btn-sm', text: '<i class="fas fa-print me-1"></i> Print' }
            ],
            scrollX: true,
            scrollY: '400px',
            responsive: true,
            paging: true,
            searching: true,
            info: true
        });

        $('#dataTable4').DataTable({
            dom: '<"d-flex justify-content-between"lfB>rtip',
            buttons: [
                { extend: 'copy', className: 'btn btn-primary btn-sm', text: '<i class="fas fa-copy me-1"></i> Copy' },
                { extend: 'csv', className: 'btn btn-success btn-sm', text: '<i class="fas fa-file-csv me-1"></i> CSV' },
                { extend: 'excel', className: 'btn btn-warning btn-sm', text: '<i class="fas fa-file-excel me-1"></i> Excel' },
                { extend: 'pdf', className: 'btn btn-danger btn-sm', text: '<i class="fas fa-file-pdf me-1"></i> PDF' },
                { extend: 'print', className: 'btn btn-info btn-sm', text: '<i class="fas fa-print me-1"></i> Print' }
            ],
            scrollX: true,
            scrollY: '400px',
            responsive: true,
            paging: true,
            searching: true,
            info: true
        });

        $('#dataTable5').DataTable({
            dom: '<"d-flex justify-content-between"lfB>rtip',
            buttons: [
                { extend: 'copy', className: 'btn btn-primary btn-sm', text: '<i class="fas fa-copy me-1"></i> Copy' },
                { extend: 'csv', className: 'btn btn-success btn-sm', text: '<i class="fas fa-file-csv me-1"></i> CSV' },
                { extend: 'excel', className: 'btn btn-warning btn-sm', text: '<i class="fas fa-file-excel me-1"></i> Excel' },
                { extend: 'pdf', className: 'btn btn-danger btn-sm', text: '<i class="fas fa-file-pdf me-1"></i> PDF' },
                { extend: 'print', className: 'btn btn-info btn-sm', text: '<i class="fas fa-print me-1"></i> Print' }
            ],
            scrollX: true,
            scrollY: '400px',
            responsive: true,
            paging: true,
            searching: true,
            info: true
        });

        // Logika switch antara tabel
        $('.card-hover').on('click', function () {
            const target = $(this).data('target');
            $('.table-responsive').hide(); // Sembunyikan semua tabel
            $(`#${target}`).show(); // Tampilkan tabel yang dipilih
        });

        // Tampilkan tabel pertama secara default
        $('#chartContainer').show();
    });

</script>

<script>

    function switchTable(card) {
        const targetTableId = card.getAttribute("data-target");
        const cardId = card.id;
        showTable(targetTableId, cardId);
    }

    function showTable(tableId, cardId) {
        // Sembunyikan semua tabel
        const allTables = document.querySelectorAll(".table-responsive");
        allTables.forEach(table => {
            table.style.display = "none";
        });

        // Tampilkan tabel yang dipilih
        const targetTable = document.getElementById(tableId);
        if (targetTable) {
            targetTable.style.display = "block";
        }

        // Hapus kelas aktif dari semua kartu
        const allCards = document.querySelectorAll(".card-hover");
        allCards.forEach(card => {
            card.classList.remove("active");
        });

        // Tambahkan kelas aktif ke kartu yang dipilih
        const targetCard = document.getElementById(cardId);
        if (targetCard) {
            targetCard.classList.add("active");
        }
    }
</script>

<script>
    // Data Section
    const sectionLabels = {!! json_encode($sectionData->keys()) !!};
    const sectionCounts = {!! json_encode($sectionData->values()) !!};

    // Data Pregnancy Status
    const pregnancyLabels = {!! json_encode($pregnancyData->keys()) !!};
    const pregnancyCounts = {!! json_encode($pregnancyData->values()) !!};

    // Chart Berdasarkan Section
    const sectionChart = new Chart(document.getElementById('sectionChart'), {
        type: 'bar',
        data: {
            labels: sectionLabels,
            datasets: [{
                label: 'Jumlah',
                data: sectionCounts,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Data Berdasarkan Section' }
            }
        }
    });

    // Chart Berdasarkan Pregnancy Status
    const pregnancyChart = new Chart(document.getElementById('pregnancyChart'), {
        type: 'pie',
        data: {
            labels: pregnancyLabels,
            datasets: [{
                data: pregnancyCounts,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)',
                    'rgba(75, 192, 192, 0.5)',
                    'rgba(255, 206, 86, 0.5)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Data Berdasarkan Pregnancy Status' }
            }
        }
    });
</script>


<script>
    // Data Age Category
    const ageCategoryLabels = {!! json_encode($ageCategoryData->keys()) !!};
    const ageCategoryCounts = {!! json_encode($ageCategoryData->values()) !!};

    // Data Rekomendasi KB Berdasarkan Tahun
    const recommendedByYearData = {!! json_encode($recommendedDataByYear) !!};
    const recommendedYears = Object.keys(recommendedByYearData);
    const recommendedDatasets = Object.keys(recommendedByYearData[recommendedYears[0]]).map((key) => ({
        label: key,
        data: recommendedYears.map((year) => recommendedByYearData[year][key] || 0),
        backgroundColor: `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, 0.5)`,
        borderColor: `rgba(${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, ${Math.floor(Math.random() * 255)}, 1)`,
        borderWidth: 1
    }));

    // Chart Berdasarkan Age Category
    const ageCategoryChart = new Chart(document.getElementById('ageCategoryChart'), {
        type: 'doughnut',
        data: {
            labels: ageCategoryLabels,
            datasets: [{
                label: 'Jumlah',
                data: ageCategoryCounts,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(54, 162, 235, 0.5)',
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(54, 162, 235, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Data Berdasarkan Age Category' }
            }
        }
    });

    // Chart Rekomendasi KB Berdasarkan Tahun
    const recommendedByYearChart = new Chart(document.getElementById('recommendedByYearChart'), {
        type: 'bar',
        data: {
            labels: recommendedYears,
            datasets: recommendedDatasets
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
                title: { display: true, text: 'Rekomendasi KB Berdasarkan Tahun' }
            },
            scales: {
                x: { stacked: true },
                y: { stacked: true, beginAtZero: true }
            }
        }
    });
</script>

@endsection
