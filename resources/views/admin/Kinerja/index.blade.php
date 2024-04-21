@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Kinerja') }}</h1>

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

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Status LFU KP</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Commline GI GH</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="h3 mb-4 text-gray-800">{{ __('Keberhasil FLISR') }}</h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                                &Sigma; Inisiasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
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
                            <div class="h5 font-weight-bold text-success text-uppercase mb-1">
                                &Sigma; Gagal</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
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
                            <div class="h5 font-weight-bold text-info text-uppercase mb-1">&Sigma; Sukses
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0</div>
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

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-warning text-uppercase mb-1">
                                % Sukses Hari</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 font-weight-bold text-warning text-uppercase mb-1">
                                % Sukses bulan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                        Availbility TS (Telesignal)</div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="input-group mb-4">

                            <div class="col-sm-5">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="start_date">
                            </div>
                            <div class="col-sm-5">
                                <label for="">End Date</label>
                                <input type="date" class="form-control" name="end_date">
                            </div>
                            <button class="btn btn-primary" type="submit">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                        Availbility TM (Telemetering)</div>
                </div>

                <div class="card-body">
                    <form action="">
                        @csrf
                        <form>
                            <div class="input-group mb-4">
                                <div class="col-sm-5">
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                                <div class="col-sm-5">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </form>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                        Avaiblity RC (Remote Control)</div>
                </div>
                <div class="card-body">
                    <form action="">
                        @csrf
                        <form>
                            <div class="input-group mb-4">
                                <div class="col-sm-5">
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                                <div class="col-sm-5">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                        Availility TID SCADA</div>
                </div>
                <div class="card-body">
                    <form action="">
                        @csrf
                        <form>
                            <div class="input-group mb-4">
                                <div class="col-sm-5">
                                    <label for="">Start Date</label>
                                    <input type="date" class="form-control" name="start_date">
                                </div>
                                <div class="col-sm-5">
                                    <label for="">End Date</label>
                                    <input type="date" class="form-control" name="end_date">
                                </div>
                                <button class="btn btn-primary" type="submit">Filter</button>
                            </div>
                        </form>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
