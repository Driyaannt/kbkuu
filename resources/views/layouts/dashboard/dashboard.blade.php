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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="chart-container">
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
