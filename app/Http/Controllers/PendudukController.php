<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use App\Models\KartuKeluarga;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;

class PendudukController extends Controller
{
	#tampil data
    public function index()
    {
    	//$penduduks = DB::table('penduduk')->get();
    	$penduduk = Penduduk::all();
        $kartukeluarga = KartuKeluarga::all();
        $pekerjaan = Pekerjaan::all();
        $levelpendidikan = LevelPendidikan::all();
        $kewarganegaraan = Kewarganegaraan::all();
    	//return $penduduks;
    	//return view('penduduk.data', ['penduduk' => $penduduks]);
    	return view('penduduk/index', compact('penduduk', 'kartukeluarga', 'pekerjaan', 'levelpendidikan', 'kewarganegaraan')); 
    	//return view('penduduk/data', ['penduduk' => $penduduks]);
    }
    
    public function create()
    {
        $kewarganegaraan = Kewarganegaraan::all();
        $pekerjaan = Pekerjaan::all();
        $levelpendidikan = LevelPendidikan::all();
        $kartukeluarga = KartuKeluarga::all();
        return view('penduduk.create', compact('kartukeluarga', 'levelpendidikan', 'pekerjaan', 'kewarganegaraan'));
    }

    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'kartu_keluarga_id' => 'required', 
            'nama' => 'required', 
            'nik' => 'required', 
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'level_pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'status_pernikahan' => 'required',
            'status_keluarga' => 'required',
            'kewarganegaraan_id' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        Penduduk::create($request->all()); //Fungsi untuk menyimpan data inputan kita

        return redirect('penduduk')
            ->with('status', 'data penduduk berhasil ditambahkan.');
    }

    public function show(Penduduk $penduduk)
    {
        // return $penduduk;
        return view('penduduk/show', compact('penduduk')); 
    }

    public function edit(Penduduk $penduduk)
    {
        $kartukeluarga = KartuKeluarga::all();
        $kewarganegaraans = Kewarganegaraan::all();
        $pekerjaans = Pekerjaan::all();
        $levelpendidikans = LevelPendidikan::all();
        return view('penduduk/edit', compact('penduduk', 'kartukeluarga', 'kewarganegaraans', 'pekerjaans', 'levelpendidikans'));
    }

     public function update(Request $request, Penduduk $penduduk)
    {
        $request->validate([
 
            'nama' => 'required', 
            'nik' => 'required', 
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'level_pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'status_pernikahan' => 'required',
            'status_keluarga' => 'required',
            'kewarganegaraan_id' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]);

        $penduduk->nama = $request->nama;
        $penduduk->nik = $request->nik;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->agama = $request->agama;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->level_pendidikan_id = $request->level_pendidikan_id;
        $penduduk->pekerjaan_id = $request->pekerjaan_id;
        $penduduk->status_pernikahan = $request->status_pernikahan;
        $penduduk->status_keluarga = $request->status_keluarga;
        $penduduk->kewarganegaraan_id = $request->kewarganegaraan_id;
        $penduduk->ayah = $request->ayah;
        $penduduk->ibu = $request->ibu;
        $penduduk->save();

        return redirect('penduduk')
            ->with('status', 'data penduduk berhasil diupdate.');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect('penduduk')
            ->with('status', 'data penduduk berhasil dihapus.');
    }
}
