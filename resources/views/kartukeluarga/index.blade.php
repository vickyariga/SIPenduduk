@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Kartu Keluarga</h1>
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
                            <strong>Pengelolaan Kartu Keluarga</strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('kartukeluarga/create') }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                            </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>NO</th>
                                    <th>No KK</th>
                                    <th>Jorong</th>
                                    <th>Tanggal Pencatatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kartukeluarga as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->no }}</td>
                                        <td>{{ $item->jorong->nama }}</td>
                                        <td>{{ $item->tanggal_pencatatan }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('kartukeluarga/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"> Edit</i>
                                            </a>
                                            <a href="{{ url('kartukeluarga/'.$item->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"> Lihat</i>
                                            </a>
                                            <form action="{{ url('kartukeluarga/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data?')">
                                            @method('delete') 
                                            @csrf                                         
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash">Delete</i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
 </div>
@endsection
