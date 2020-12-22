@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
 <div class="breadcrumbs">
            <!-- <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div
            </div> -->
            <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div> -->
        </div>
@endsection

@section('content')
 <div class="content mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Laporan Data Penduduk</h1><br><br>
                        <div class="animated fadeIn">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Penduduk Usia Produktif</strong>
                                    </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ url('laporan/penduduk')}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-eye"></i> Lihat
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Daftar Penduduk per Nagari</strong>
                                    </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ url('laporan/nagari')}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-eye"></i> Lihat
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Jumlah Penduduk Pendidikan Dibawah SMP</strong>
                                    </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <a href="{{ url('laporan/penduduk')}}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-eye"></i> Lihat
                                        </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>    
                </div>
            </div>
        </div>
    </div>
 </div>       
@endsection


