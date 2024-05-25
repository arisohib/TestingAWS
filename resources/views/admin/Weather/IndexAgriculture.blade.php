@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Smart Weather Agriculture') }}</h1>

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
            <h6 class="m-0 font-weight-bold text-primary">Tabel</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="RekapWO" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Wind Speed</th>
                            <th>UV</th>
                            <th>Pressure</th>
                            <th>Temperature</th>
                            <th>Rainfall</th>
                            <th>Humidity</th>
                            <th>WindDirection</th>
                            <th>Latitude</th>
                            <th>Longtitude</th>
                            <th>Dibuat</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($dataWeather as $data )
                            <tr>
                                <td>{{ $data->TS }}</td>
                                <td>{{ $data->WindSpeed }}</td>
                                <td>{{ $data->UV }}</td>
                                <td>{{ $data->Pressure }}</td>
                                <td>{{ $data->Temperature }}</td>
                                <td>{{ $data->Rainfall }}</td>
                                <td>{{ $data->Humidity }}</td>
                                <td>{{ $data->WindDirection }}</td>
                                <td>{{ $data->Latitude }}</td>
                                <td>{{ $data->Longitude }}</td>
                                <td>{{ $data->TimeStamp }}</td>
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
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#RekapWO').DataTable();
        });
    </script>
@endpush
