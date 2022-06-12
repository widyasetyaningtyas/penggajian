<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table='pegawai';
    protected $primaryKey='nip';
    public $timestamps = false;
    protected $fillable=array('nama_pegawai','kode_jabatan','kode_golongan','status','jumlah_anak');

    public function jabatan(){
        return $this->belongsTo('App\Jabatan','kode_jabatan');
    }
    public function golongan(){
        return $this->belongsTo('App\Golongan','kode_golongan');
    }
    public function penggajian(){
        return $this->hasMany('App\Penggajian','id');
    }
}
