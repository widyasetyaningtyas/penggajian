<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table='jabatan';
    protected $primaryKey='kode_jabatan';
    public $timestamps = false;
    protected $fillable=array('nama_jabatan','gapok','tunjangan_jabatan');

    public function pegawai(){
    	return $this->hasMany('App\Pegawai','nip');
    }

}
