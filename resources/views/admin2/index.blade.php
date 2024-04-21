@extends('layouts.admin2')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard Admin') }}</h1>

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

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Beban Tertinggi Siang Ini
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">40,000 MW</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Beban Tertinggi Hari Ini
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">15,000 mW</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Beban Tertinggi Bulan Ini
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">25000 mW</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Analytical</h3>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Beban Tertinggi Jatim Tahun Ini</li>
                        <ul>
                            <li>MW: </li>
                            <li>Tanggal</li>
                            <li>Pukul</li>
                        </ul>
                        <li>Beban Tertinggi Jatim Bulan Ini</li>
                        <ul>
                            <li>MW: </li>
                            <li>Tanggal</li>
                            <li>Pukul</li>
                        </ul>
                        <li>Beban Tertinggi Jatim Tahun Ini</li>
                        <ul>
                            <li>MW: </li>
                            <li>Tanggal</li>
                            <li>Pukul</li>
                        </ul>
                        <li>Beban Tertinggi Jatim Hari Ini</li>
                        <ul>
                            <li>MW: </li>
                            <li>Tanggal</li>
                            <li>Pukul</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card"></div>
            <img src="{{ asset('Image/PetaJatim.png') }}" alt="" style="width: 100%">
        </div>
    </div>
@endsection
