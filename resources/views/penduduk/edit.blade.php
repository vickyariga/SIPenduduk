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
                            <strong>Edit Data Penduduk</strong>
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
                                <form action="{{ url('penduduk/'.$penduduk->id)}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                        <input name="kartu_keluarga_id" value="{{old('kartu_keluarga_id', $penduduk->kartukeluarga->no) }}" class="form-control" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" value="{{old('nama', $penduduk->nama) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="text" name="nik" value="{{old('nik', $penduduk->nik) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat lahir</label>
                                        <input type="text" name="tempat_lahir" value="{{old('tempat_lahir', $penduduk->tempat_lahir) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" value="{{old('tanggal_lahir', $penduduk->tanggal_lahir) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" value="{{old('agama', $penduduk->agama)}}" class="form-control">
                                            <option value="Islam"> Islam </option>
                                            <option value="Kristen"> Kristen </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" value="{{old('jenis_kelamin', $penduduk->jenis_kelamin)}}" class="form-control">
                                            <option value="Laki-Laki"> Laki-Laki </option>
                                            <option value="Perempuan"> Perempuan </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Level Pendidikan</label>
                                        <select name="level_pendidikan_id" value="" class="form-control">
                                            @foreach ($levelpendidikans as $item)
                                            <option value="{{ $item->id }}" {{old('level_pendidikan_id', $penduduk->level_pendidikan_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->nama}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select name="pekerjaan_id" value="" class="form-control">
                                            @foreach ($pekerjaans as $item)
                                            <option value="{{ $item->id }}" {{old('pekerjaan_id', $penduduk->pekerjaan_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->nama}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <select name="status_pernikahan" value="{{old('status_pernikahan', $penduduk->status_pernikahan)}}" class="form-control" >
                                            <option value="belum menikah">Belum Menikah</option>
                                            <option value="menikah">Menikah</option>
                                            <option value="janda/duda">Janda/Duda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Keluarga</label>
                                        <select name="status_keluarga" value="{{old('status_keluarga', $penduduk->status_keluarga)}}" class="form-control" >
                                            <option value="Ayah">Ayah</option>
                                            <option value="Ibu">Ibu</option>
                                            <option value="Orang Tua">Orang Tua</option>
                                            <option value="anak">Anak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kewarganegaraan</label>
                                        <select name="kewarganegaraan_id" value="" class="form-control">
                                            @foreach ($kewarganegaraans as $item)
                                            <option value="{{ $item->id }}" {{old('kewarganegaraan_id', $penduduk->kewarganegaraan_id) == $item->id ? 'selected' : null }}>
                                                {{ $item->nama}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                        <div class="form-group">
                                        <label>Ayah</label>
                                        <input type="text" name="ayah" value="{{old('ayah', $penduduk->ayah) }}" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ibu</label>
                                        <input type="text" name="ibu" value="{{old('ibu', $penduduk->ibu) }}" class="form-control" autofocus required>
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
