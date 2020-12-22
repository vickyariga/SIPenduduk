<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use App\Http\Controllers\Controller;
use App\Models\Jorong;
 
class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kartukeluarga = KartuKeluarga::all();
    	return view('kartukeluarga/index', compact('kartukeluarga')); 
    }
    
    public function create()
    {

        $jorongs = Jorong::all();
        return view('kartukeluarga.create', compact('jorongs'));
    }
 
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
        	'no' => 'required', 
        	'jorong_id' => 'required', 
            'tanggal_pencatatan' => 'required', 
        ]);

        KartuKeluarga::create($request->all());

        return redirect('kartukeluarga')
             ->with('status', 'data kk berhasil ditambahkan.');
    }

    public function show(KartuKeluarga $kartukeluarga)
    {
        // return $penduduk;
        return view('kartukeluarga/show', compact('kartukeluarga')); 
    }

    public function edit(KartuKeluarga $kartukeluarga)
    {
        $jorongs = Jorong::all();
        return view('kartukeluarga/edit', compact('kartukeluarga', 'jorongs'));
    }

     public function update(Request $request, KartuKeluarga $kartukeluarga)
    {
        $request->validate([
            'no' => 'required', 
            'jorong_id' => 'required', 
            'tanggal_pencatatan' => 'required', 
        ]);

        $kartukeluarga->no = $request->no;
        $kartukeluarga->jorong_id = $request->jorong_id;
        $kartukeluarga->tanggal_pencatatan = $request->tanggal_pencatatan;
        $kartukeluarga->save();

        return redirect('kartukeluarga')
           ->with('status', 'data kk berhasil diupdate.');
    }

    public function destroy(KartuKeluarga $kartukeluarga)
    {
         $kartukeluarga->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

         return redirect('kartukeluarga')
             ->with('status', 'data kk berhasil dihapus.');
    }
}
