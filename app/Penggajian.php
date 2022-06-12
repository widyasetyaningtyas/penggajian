<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    protected $table='master_gaji';
    protected $primaryKey='id';
    public $timestamps = false;
    protected $fillable=array('bulan','nip','lembur','potongan','created_at');

    public function pegawai(){
        return $this->hasMany('App\Pegawai','nip');
    }
    public function golongan(){
        return $this->belongsTo('App\Golongan','kode_golongan');
    }
}
