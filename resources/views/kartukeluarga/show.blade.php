@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Lihat Data KK</h1>
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
                            <strong>Detail Data KK</strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('kartukeluarga') }}" class="btn btn-secondary btn-sm">
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
                                            <th>NO KK</th>
                                            <td>{{ $kartukeluarga->no}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jorong </th>
                                            <td>{{ $kartukeluarga->jorong->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pencatatan</th>
                                            <td>{{ $kartukeluarga->tanggal_pencatatan}}</td>
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
