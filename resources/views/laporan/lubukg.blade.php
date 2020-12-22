@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Laporan</h1>
                    </div>
                </div>
            </div>
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

            <div class="animated fadeIn">

                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Laporan Data Penduduk Nagari Lubuk Gadang</strong>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>NIK</th>
                                    <th>No KK</th>
                                    <th>Jorong</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penduduk as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jenis_kelamin}}</td>
                                        <td>{{ $item->nik}}</td>
                                        <td>{{ $item->kartukeluarga->no}}</td>
                                        <td>{{ $item->kartukeluarga->jorong->nama}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
 </div>
@endsection
