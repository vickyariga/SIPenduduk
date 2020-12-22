<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Nagari;
use App\Models\Jorong;
use App\Models\kartukeluarga;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function penduduk()
    {

        $from = Carbon::now()->subYears(64);
        $to = Carbon::now()->subYears(15);
        $penduduk = Penduduk::whereBetween('tanggal_lahir',[$from,$to])->get();
        //dd($penduduk);
        
        return view('laporan/penduduk',compact('penduduk'));
    }

    public function nagari(){
        $penduduk = Penduduk::leftJoin('kartu_keluarga','kartu_keluarga_id','kartu_keluarga.id')
        ->leftJoin('jorong','jorong_id','jorong.id')
        ->leftJoin('nagari','nagari_id','nagari.id')
        ->get();
        //dd($penduduk);
        return view('laporan/nagari', compact('penduduk'));
    }

    public function lubukg()
    {
    	$penduduk = Penduduk::all();
    	$nagari = Nagari::all();
    	$jorong = Jorong::all();
    	$kartukeluarga = kartukeluarga::all();
    	return view('laporan.lubukg', compact('nagari', 'jorong', 'kartukeluarga', 'penduduk')); 
    }
}
