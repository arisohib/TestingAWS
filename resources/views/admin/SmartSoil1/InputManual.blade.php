@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Input Manual') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a href="{{ url()->previous() }}" class="btn btn-danger mb-4">Kembali</a>

    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('store.data') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ID</label>
                                <input type="text" class="form-control" name="idsoil" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="">Suhu</label>
                                <input type="text" class="form-control" name="suhu" id="">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Soil moisture</label>
                                <input type="text" class="form-control" name="soilmoisture" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="">PH</label>
                                <input type="text" class="form-control" name="ph" id="">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Nitrogen</label>
                                <input type="text" class="form-control" name="nitrogen" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="">Kalium</label>
                                <input type="text" class="form-control" name="kalium" id="">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">EC</label>
                                <input type="text" class="form-control" name="ec" id="">
                            </div>
                            <div class="col-md-6">
                                <label for="">Fosfor</label>
                                <input type="text" class="form-control" name="fosfor" id="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Latitude</label>
                                <input type="text" class="form-control" name="latitude" id="latitude">
                            </div>
                            <div class="col-md-6">
                                <label for="">Longtitude</label>
                                <input type="text" class="form-control" name="longitude" id="longtitude">
                            </div>

                        </div>
                        <button type="submit" class="btn btn-warning mt-3">Tambah Data</button>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger" onclick="getPreciseLocation()"> <i class="fas fa-fw fa-map-pin"></i>
                        Ambil Koordinat</button>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">

                    <img src="{{ asset('Image/tambahdata.png') }}" alt="" style="width: 100%">

                </div>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function getPreciseLocation() {
            // console.log('tes');
            if (navigator.geolocation) {
                // console.log(navigator.geolocation);
                navigator.geolocation.getCurrentPosition(showExactPosition)
            } else {
                x.innerHTML = "Geolocation is Not Supported "
            }
        }

        function showExactPosition(position) {
            // console.log(position);
            const latitude = position.coords.latitude;
            const longtitude = position.coords.longitude;

            // console.log(longtitude);
            document.getElementById("latitude").value = latitude;
            document.getElementById("longtitude").value = longtitude;
        }
    </script>
@endpush
