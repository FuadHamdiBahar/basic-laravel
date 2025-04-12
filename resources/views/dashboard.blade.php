@extends('index')

@section('body')
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Trend Transaksi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-6 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
              
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div>
                    <canvas id="totalTransaksiChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xl-8">
            
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const totalTransaksiChart = document.getElementById('totalTransaksiChart');

        $.ajax({
            type: 'GET',
            dataType: "json",
            url: '/api/jumlah_transaksi',
            success: function(data, status, xhr) {
                console.log('data: ', data);
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data['labels'],
                        datasets: [{
                            label: 'Jumlah Transaksi',
                            data: data['n_transaksi'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                new Chart(totalTransaksiChart, {
                    type: 'line',
                    data: {
                        labels: data['labels'],
                        datasets: [{
                            label: 'Jumlah Transaksi',
                            data: data['total_transaksi'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        });
    </script>
@endsection
