<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{ 
    use HasFactory;

    protected $table='kartu_keluarga';
    public $timestamps = false;
 

    public function penduduks(){
        return $this->hasMany('App\Models\Penduduk');
    }

    public function jorong(){
        return $this->belongsTo('App\Models\Jorong', 'jorong_id');
    }

    protected $primaryKey = 'id';
    protected $fillable = [
            'id',
            'no',
            'jorong_id',
            'tanggal_pencatatan',
    ];

    protected $hidden = ['created_at', 'updated_at'];

}
