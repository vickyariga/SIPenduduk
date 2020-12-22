@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Lihat Data Penduduk</h1>
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
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status')}}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong>Detail Data Penduduk</strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('penduduk') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i> Back
                                </a>
                            </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-md-8 offst-md-2">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>No Kartu Keluarga</th>
                                            <td>{{ $penduduk->kartukeluarga->no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td>{{ $penduduk->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <td>{{ $penduduk->nik}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <td>{{ $penduduk->tempat_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>{{ $penduduk->tanggal_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th>Agama</th>
                                            <td>{{ $penduduk->agama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>{{ $penduduk->jenis_kelamin}}</td>
                                        </tr>
                                        <tr>
                                            <th>Level Pendidikan</th>
                                            <td>{{ $penduduk->levelpendidikan->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan</th>
                                            <td>{{ $penduduk->pekerjaan->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Pernikahan</th>
                                            <td>{{ $penduduk->status_pernikahan}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status Keluarga</th>
                                            <td>{{ $penduduk->status_keluarga}}</td>
                                        </tr>
                                        <tr>
                                            <th>Kewarganegaraan</th>
                                            <td>{{ $penduduk->kewarganegaraan->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ayah</th>
                                            <td>{{ $penduduk->ayah}}</td>
                                        </tr>
                                        <tr>
                                            <th>Ibu</th>
                                            <td>{{ $penduduk->ibu}}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
 </div>
@endsection
