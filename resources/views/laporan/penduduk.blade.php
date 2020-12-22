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

            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Penduduk Usia Produktif</strong>
                        </div>
                        <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($penduduk as $item)
                                  <tr>
                                      <td>{{ $loop->iteration }}</td>
                                      <td>{{ $item->nama}}</td>
                                      <td>{{ $item->tanggal_lahir}}</td>
                                  </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                </div>
        	</div>
</div>
@endsection

