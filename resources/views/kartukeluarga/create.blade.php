@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Penduduk</h1>
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
                            <strong>Tambah Data Kartu Keluarga</strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('kartukeluarga') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i> Back
                                </a>
                            </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ url('kartukeluarga')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>No KK</label>
                                        <input type="text" name="no" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jorong </label>
                                        <select name="jorong_id" class="form-control">
                                            <option value="">-Pilih-</option>\
                                            @foreach ($jorongs as $item)
                                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pencatatan</label>
                                        <input type="date" name="tanggal_pencatatan" class="form-control" autofocus required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
 </div>
@endsection
