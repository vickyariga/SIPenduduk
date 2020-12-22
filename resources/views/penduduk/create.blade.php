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
                            <strong>Tambah Data Penduduk</strong>
                        </div>
                            <div class="pull-right">
                                <a href="{{ url('penduduk') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i> Back
                                </a>
                            </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <form action="{{ url('penduduk')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <select name="kartu_keluarga_id" class="form-control">
                                            <option value="">--no kk--</option>
                                            @foreach ($kartukeluarga as $item)
                                            <option value="{{ $item->id }}">{{ $item->no }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" class="form-control">
                                            <option value="">-Pilih-</option>
                                            <option value="islam">Islam</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="budha">Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control">
                                            <option value="">-pilih-</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Level Pendidikan</label>
                                        <select name="level_pendidikan_id" class="form-control">
                                            <option value="">-Pilih-</option>
                                            @foreach ($levelpendidikan as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select name="pekerjaan_id" class="form-control">
                                            <option value="">-Pilih-</option>
                                            @foreach ($pekerjaan as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <select name="status_pernikahan" class="form-control" >
                                            <option value="">-Pilih-</option>
                                            <option value="belum menikah">Belum Menikah</option>
                                            <option value="menikah">Menikah</option>
                                            <option value="janda/duda">Janda/Duda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Keluarga</label>
                                        <select name="status_keluarga" class="form-control" >
                                            <option value="">-Pilih-</option>
                                            <option value="Ayah">Ayah</option>
                                            <option value="Ibu">Ibu</option>
                                            <option value="Orang Tua">Orang Tua</option>
                                            <option value="anak">Anak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <select name="kewarganegaraan_id" class="form-control">
                                            <option value="">-Pilih-</option>
                                            @foreach ($kewarganegaraan as $item)
                                                <option value="{{$item->id}}">{{$item->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="form-group">
                                        <label>Ayah</label>
                                        <input type="text" name="ayah" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ibu</label>
                                        <input type="text" name="ibu" class="form-control" autofocus required>
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
