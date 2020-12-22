<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{ 
    protected $table = 'penduduk';


    public function kartukeluarga()
    {
        return $this->belongsTo('App\Models\KartuKeluarga', 'kartu_keluarga_id');
    }
    public function levelpendidikan()
    {
        return $this->belongsTo('App\Models\LevelPendidikan', 'level_pendidikan_id');
    }
    public function pekerjaan()
    {
        return $this->belongsTo('App\Models\Pekerjaan', 'pekerjaan_id');
    }
    public function kewarganegaraan()
    {
        return $this->belongsTo('App\Models\Kewarganegaraan', 'kewarganegaraan_id');
    }
    protected $primaryKey = 'id';
    protected $fillable = [
            'kartu_keluarga_id',
            'nama',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'agama',
            'jenis_kelamin',
            'level_pendidikan_id',
            'pekerjaan_id',
            'status_pernikahan',
            'status_keluarga',
            'kewarganegaraan_id',
            'ayah',
            'ibu',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
