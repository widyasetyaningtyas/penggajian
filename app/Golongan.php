<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table='golongan';
    protected $primaryKey='kode_golongan';
    public $timestamps = false;
    protected $fillable=array('nama_golongan','tunjangan_suami_istri','tunjangan_anak','uang_makan','uang_lembur','askes');

    public function pegawai(){
    	return $this->hasMany('App\Pegawai','nip');
    }
}
