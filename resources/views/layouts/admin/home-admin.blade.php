@extends('layouts.app')

@section('content')
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

<div class="row mt-3">
    <div class="col-md-6 col-lg-4">
      <div class="card rounded-3 card-hover">
        <a href="#" class="stretched-link"></a>
        <div class="card-body">
          <div class="d-flex align-items-center">
            <span class="flex-shrink-0"><i class="ti ti-photo text-warning display-6"></i></span>
            <div class="ms-4">
              <h4 class="card-title text-dark">My Photos</h4>
              <h6 class="card-subtitle mb-0 fs-2 fw-normal">
                2.4GB Junk File
              </h6>
              <span class="fs-2 mt-1 ">Folder: 26 Items: 159 Used: 23.6GB</span>
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
            <span class="flex-shrink-0"><i class="ti ti-brand-google-drive text-info display-6"></i></span>
            <div class="ms-4">
              <h4 class="card-title text-dark">My Google Docs</h4>
              <h6 class="card-subtitle mb-0 fs-2 fw-normal">
                2.4GB Junk File
              </h6>
              <span class="fs-2 mt-1 ">Folder: 26 Items: 159 Used: 23.6GB</span>
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
            <span class="flex-shrink-0"><i class="ti ti-users text-success display-6"></i></span>
            <div class="ms-4">
              <h4 class="card-title text-dark">My Google Contacts</h4>
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
    </div>
  </div>

  <div class="card" style="background-color: #FFCCD5; height:20px; border-radius:20px;"></div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0">Data Report KB</h5>
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

                <div class="table-responsive">
                    <table id="dataTable" class="table table-hover table-striped table-bordered display nowrap w-100">
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
                                <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y') }} jam {{ \Carbon\Carbon::parse($row->created_at)->format('H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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
        var table = $('#dataTable').DataTable({
            dom: '<"d-flex justify-content-between"lfB>rtip', // Custom layout for filter, buttons, and pagination
            buttons: [
                {
                    extend: 'copy',
                    className: 'btn btn-primary btn-sm',
                    text: '<i class="fas fa-copy me-1"></i> Copy',
                    filename: 'Data_KB_Copy' // Change file name for copy
                },
                {
                    extend: 'csv',
                    className: 'btn btn-success btn-sm',
                    text: '<i class="fas fa-file-csv me-1"></i> CSV',
                    filename: 'Data_KB_CSV' // Change file name for CSV export
                },
                {
                    extend: 'excel',
                    className: 'btn btn-warning btn-sm',
                    text: '<i class="fas fa-file-excel me-1"></i> Excel',
                    filename: 'Data_KB_Excel' // Change file name for Excel export
                },
                {
                    extend: 'pdf',
                    className: 'btn btn-danger btn-sm',
                    text: '<i class="fas fa-file-pdf me-1"></i> PDF',
                    filename: 'Data_KB_PDF' // Change file name for PDF export
                },
                {
                    extend: 'print',
                    className: 'btn btn-info btn-sm',
                    text: '<i class="fas fa-print me-1"></i> Print',
                    title: 'Data KB Print', // Change the title for print
                    filename: 'Data_KB_Print' // Change file name for print
                }
            ],
            scrollX: true, // Enable horizontal scrolling
            scrollY: '400px', // Set vertical scrolling with max height
            scrollCollapse: true, // Allow table to collapse if content is small
            responsive: true,
            paging: true,
            searching: true,
            info: true
        });

        // Apply filter to table
        // $('#filter_id').on('keyup', function () {
        //     table.column(0).search(this.value).draw();
        // });

        // $('#filter_nama_akseptor').on('keyup', function () {
        //     table.column(1).search(this.value).draw();
        // });

        // Add more filters as needed
    });
</script>

@endsection
