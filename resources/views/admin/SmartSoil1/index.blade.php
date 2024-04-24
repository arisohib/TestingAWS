@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Smart Soil 1') }}</h1>

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

    <div class="card mt-3">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Smart Soil 1</h6>
        </div>
        <div class="card-body">
            <div style="width: 100%; height:300px; margin: auto;">
                <canvas id="barChart"></canvas>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">Tabel</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="RekapWO" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Suhu</th>
                            {{-- <th>Soil Moisture</th> --}}
                            <th>PH</th>
                            <th>Nitrogen</th>
                            <th>Kalium</th>
                            <th>EC</th>
                            <th>Fosfor</th>
                            <th>Latitude</th>
                            <th>Longtitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($datasoil as $data )
                            <tr>
                                <td>{{ $data->idsoil }}</td>
                                <td>{{ $data->Suhu }}</td>
                                {{-- <td>{{ $data->{{ 'Soil Moisture' }} }}</td> --}}
                                <td>{{ $data->PH }}</td>
                                <td>{{ $data->Nitrogen }}</td>
                                <td>{{ $data->Kalium }}</td>
                                <td>{{ $data->EC }}</td>
                                <td>{{ $data->Fosfor }}</td>
                                <td>{{ $data->Lattitude }}</td>
                                <td>{{ $data->Longtitude }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Update Data</a>
                                    <a href="" class="btn btn-warning">Get Lokasi</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary"><i class="fas fa-fw fa-arrow-down"></i>Download Excel</button>
            <a href="{{ route('input.smartsoil1') }}" class="btn btn-warning"><i class="fas fa-fw fa-note-sticky"></i>Input Manual Data</a>
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
                labels: ["0", "1", "2", "3", "4", "5","6","7","8"],
                datasets: [{
                        label: 'Suhu', // Name the series
                        data: @json($suhu), // Specify the data values array
                        fill: false,
                        borderColor: '#ffd000', // Add custom color border (Line)
                        backgroundColor: '#ffd000', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'PH',
                        data: @json($ph),
                        fill: false,
                        borderColor: '#ff0000', // Add custom color border (Line)
                        backgroundColor: '#ff0000', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'Nitrogen',
                        data: @json($nitrogen),
                        fill: false,
                        borderColor: '#42f55a', // Add custom color border (Line)
                        backgroundColor: '#42f55a', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'Kalium',
                        data: @json($kalium),
                        fill: false,
                        borderColor: '#3E00FF', // Add custom color border (Line)
                        backgroundColor: '#3E00FF', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'EC',
                        data: @json($ec),
                        fill: false,
                        borderColor: '#00FFEC', // Add custom color border (Line)
                        backgroundColor: '#00FFEC', // Add custom color background (Points and Fill)
                        borderWidth: 3 // Specify bar border width
                    },
                    {
                        label: 'Fosfor',
                        data: @json($fosfor),
                        fill: false,
                        borderColor: '#FF00F3', // Add custom color border (Line)
                        backgroundColor: '#FF00F3', // Add custom color background (Points and Fill)
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
