@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Laporan Penduduk Per Nagari</h1>
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
                <h4 class="card-title">
                Penduduk pada nagari tertentu
                </h4>
                <form action="{{ url('laporan/nagari')}}" method="get">
                    <div class="form-row"> 
                        <div class="form-group col-md-3">
                            <select class="form-control" id="id" name="nama">
                                @foreach ($penduduk as $item)
                                <option value="{{ $item->id}}">{{ $item->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <input type="submit" value="cari" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <table id="id" class="table">
                    <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nagari</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $item)
                        <tr>
                            <td>{{$item->nik}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->tanggal_lahir}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->agama}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
            </div>
 </div>
@endsection
