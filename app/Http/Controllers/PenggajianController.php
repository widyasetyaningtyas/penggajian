<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Penggajian;
use App\Jabatan;
use App\Pegawai;
use App\Golongan;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function NoPenggajian()
    {
        $tgl    = date('Y-m-d');
        $number = Penggajian::where("created_at","like","%".$tgl."%")->count();
        $angka  = $number + 1;
        $codes  = str_pad($angka, 1, rand(1,9), STR_PAD_LEFT);
        $code   = 'GAJI-'.date('ymd').$codes;
        return $code;
    }
    public function index()
    {
        $data['penggajian'] = Penggajian::get();
        return view('penggajian.index',$data);
        // $data['query']= DB::table('pegawai')
        //     ->join('master_gaji','master_gaji.nip','=','pegawai.nip')
        //     ->join('jabatan','jabatan.kode_jabatan','=','pegawai.kode_jabatan')
        //     ->join('golongan','golongan.kode_golongan','=','pegawai.kode_golongan')
        //     ->select('master_gaji.nip','pegawai.nama_pegawai','golongan.nama_golongan','jabatan.gapok','master_gaji.potongan')->get();
        // return view('penggajian.index',$data);
    }

    public function struk($id)
    {
        $data['penggajian']= Penggajian::find($id);
        return view('penggajian.struk',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['nomat'] = self::NoPenggajian();
        return view('penggajian.create',$data);
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penggajian = new Penggajian;
        $penggajian->bulan = Request::get('bulan');
        $penggajian->nip = Request::get('nip');
        $penggajian->potongan = Request::get('potongan');
        $penggajian->gaji_bersih = Request::get('gaji_bersih');
        $penggajian->save();

        $data['query']= DB::table('pegawai')
            ->join('master_gaji','master_gaji.nip','=','pegawai.nip')
            ->join('jabatan','jabatan.kode_jabatan','=','pegawai.kode_jabatan')
            ->join('golongan','golongan.kode_golongan','=','pegawai.kode_golongan')
            ->select('pegawai.nip','pegawai.nama_pegawai','pegawai.status','pegawai.jumlah_anak','jabatan.nama_jabatan','golongan.nama_golongan','jabatan.tunjangan_jabatan','golongan.tunjangan_suami_istri','golongan.tunjangan_anak','golongan.uang_makan','golongan.uang_lembur','golongan.askes','jabatan.gapok','master_gaji.bulan','master_gaji.potongan')

            ->where('pegawai.nip',Request::get('nip'))
            ->get();
        return view('penggajian.struk',$data);
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
        $penggajian = Penggajian::find($id)->delete();
        return redirect('penggajian');
    }

    public function cari(){
        $id = Request::get('id');
        if ($id=='') {
            $data['val'] = 2;
        }else{
            $isi = Pegawai::with('Jabatan','Golongan','Penggajian')->where('nip','=',$id)->first();
            if (empty($isi)) {
                $data['val'] = 0;
            }else{
                $data['val'] = 1;
                $data['data'] = $isi;
            }
        }

        return response($data);
    }

    // public function simpan_transaksi(Request $request){

    //     $new                        = new Penggajian;
    //     $new->id                    = self::NoPenggajian();
    //     $new->nip                   = Request::get('nip');
    //     $new->nama_pegawai          = Request::get('nama_pegawai');
    //     $new->status                = Request::get('status');
    //     $new->jumlah_anak           = Request::get('jumlah_anak');
    //     $new->nama_jabatan          = Request::get('nama_jabatan');
    //     $new->nama_golongan         = Request::get('nama_golongan');
    //     $new->tunjangan_jabatan     = Request::get('tunjangan_jabatan');
    //     $new->tunjangan_suami_istri = Request::get('tunjangan_suami_istri');
    //     $new->tunjangan_anak        = Request::get('tunjangan_anak');
    //     $new->uang_makan            = Request::get('uang_makan');
    //     $new->uang_lembur           = Request::get('uang_lembur');
    //     $new->askes                 = Request::get('askes');
    //     $new->gaji_pokok            = Request::get('gaji_pokok');
    //     $new->bulan                 = Request::get('bulan');
    //     $new->potongan              = Request::get('potongan');
    //     $new->gaji_bersih           = Request::get('gaji_bersih');

    //     $act = $new->save();

    //         $data['query']= DB::table('pegawai')
    //         ->join('master_gaji','master_gaji.nip','=','pegawai.nip')
    //         ->join('jabatan','jabatan.kode_jabatan','=','pegawai.kode_jabatan')
    //         ->join('golongan','golongan.kode_golongan','=','pegawai.kode_golongan')
    //         ->select('master_gaji.nip','pegawai.nama_pegawai','golongan.nama_golongan','jabatan.gapok','master_gaji.potongan')

    //         ->where('master_gaji.id',Request::get('id'))
    //         ->get();

    //         return view('penggajian.struk',$data);
        
    // }

}
