@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data $kartukeluarga</h1>
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
                            <strong>Edit Data $kartukeluarga</strong>
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
                                <form action="{{ url('kartukeluarga/'. $kartukeluarga->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <input type="text" name="no" value="{{old('no', $kartukeluarga->no) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Jorong Id</label>
                                        <select name="jorong_id" value="" class="form-control">
                                            @foreach ($jorongs as $item)
                                            <option value="{{ $item->id }}" {{old('jorong_id', $kartukeluarga->jorong_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->nama}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Pencatatan</label>
                                        <input type="date" name="tanggal_pencatatan" value="{{old('tanggal_pencatatan', $kartukeluarga->tanggal_pencatatan) }}" class="form-control" autofocus required>
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
