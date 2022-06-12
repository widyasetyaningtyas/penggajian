<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Pembeli;
use App\Barang;
use App\Detailpenjualan;
use App\Golongan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('pegawai')
            ->join('master_gaji','master_gaji.nip','=','pegawai.nip')
            ->join('jabatan','jabatan.kode_jabatan','=','pegawai.kode_jabatan')
            ->join('golongan','golongan.kode_golongan','=','pegawai.kode_golongan')
            ->select('pegawai.nip','pegawai.nama_pegawai','pegawai.status','pegawai.jumlah_anak','jabatan.nama_jabatan','golongan.nama_golongan','jabatan.tunjangan_jabatan','golongan.tunjangan_suami_istri','golongan.tunjangan_anak','golongan.uang_makan','golongan.uang_lembur','golongan.askes','jabatan.gapok','master_gaji.potongan','master_gaji.bulan','master_gaji.gaji_bersih')

            ->whereMonth('master_gaji.bulan',Request::get('bulan'))
            ->get();
        $data['data'] = $query;
        return view('laporan.laporan',$data);
    }

    public function cetak()
    {
        $query = DB::table('pegawai')
            ->join('master_gaji','master_gaji.nip','=','pegawai.nip')
            ->join('jabatan','jabatan.kode_jabatan','=','pegawai.kode_jabatan')
            ->join('golongan','golongan.kode_golongan','=','pegawai.kode_golongan')
            ->select('pegawai.nip','pegawai.nama_pegawai','pegawai.status','pegawai.jumlah_anak','jabatan.nama_jabatan','golongan.nama_golongan','jabatan.tunjangan_jabatan','golongan.tunjangan_suami_istri','golongan.tunjangan_anak','golongan.uang_makan','golongan.uang_lembur','golongan.askes','jabatan.gapok','master_gaji.potongan','master_gaji.bulan','master_gaji.gaji_bersih')

            ->whereMonth('master_gaji.bulan',Request::get('bulan'))
            ->get();
        $data['data'] = $query;
        return view('laporan.cetak',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
