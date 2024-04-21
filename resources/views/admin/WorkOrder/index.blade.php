@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Work Order') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold text-primary">Filter Data</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">
                    <label for="">Parameter 1</label>
                    <select name="" id="" class="form-control form-select">
                        <option value="">--Pilih</option>
                        <option value="">Gardu Induk</option>
                        <option value="">Incoming/Feeder</option>
                        <option value="">Kategori Feeder</option>
                        <option value="">Tanggal</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="">Value 1</label>
                    <input type="text" class="form-control" name="" id="">
                </div>
                <div class="col-md-2">
                    <label for=""></label>
                    <button class="btn btn-primary mt-4"><i class="fas fa-fw fa-search"></i>Cari Data</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Work Order Total</h6>
        </div>
        <div class="card-body">
            <div style="width: 100%; height:300px; margin: auto;">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Rata - Rata Penyelesaian (Hari)</h6>
        </div>
        <div class="card-body">
            <div style="width: 100%; height:300px; margin: auto;">
                <canvas id="ratarata"></canvas>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Rekap WO</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="RekapWO" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Trafo</th>
                            <th>Tipe</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary"><i class="fas fa-fw fa-arrow-down"></i>Download Excel</button>
            <a href="" class="btn btn-warning"><i class="fas fa-fw fa-note-sticky"></i>Input Manual WO</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('barChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["0", "1", "2", "3", "4", "5"],
                datasets: [{
                        label: 'Open', // Name the series
                        data: ['30', '20', '12', '23', '33', '56'], // Specify the data values array
                        fill: false,
                        borderColor: '#ffd000', // Add custom color border (Line)
                        backgroundColor: '#ffd000', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'Close',
                        data: ['14', '45', '15', '27', '56', '50'],
                        fill: false,
                        borderColor: '#ff0000', // Add custom color border (Line)
                        backgroundColor: '#ff0000', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'Pending',
                        data: ['7', '32', '24', '28', '44', '50'],
                        fill: false,
                        borderColor: '#42f55a', // Add custom color border (Line)
                        backgroundColor: '#42f55a', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    }
                ]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
            }
        });
    </script>

    <script>
        var ctx = document.getElementById('ratarata').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["0", "1", "2", "3", "4", "5"],
                datasets: [{
                    label: 'Open', // Name the series
                    data: ['30', '20', '12', '23', '33', '56'], // Specify the data values array
                    fill: false,
                    borderColor: '#ffd000', // Add custom color border (Line)
                    backgroundColor: '#ffd000', // Add custom color background (Points and Fill)
                    borderWidth: 3 // Specify bar border width
                }, ]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
            }
        });
    </script>

    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#RekapWO').DataTable();
        });
    </script>
@endpush
