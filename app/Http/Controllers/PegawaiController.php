<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Penggajian;
use App\Jabatan;
use App\Pegawai;
use App\Golongan;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pegawai'] = Pegawai::get();
        return view('pegawai.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['jabatan'] = Jabatan::get();
        $data['golongan'] = Golongan::get();
        return view('pegawai.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = new Pegawai;
        $pegawai->fill($request->all());
        $pegawai->save();
        return redirect('pegawai');
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
    public function edit($nip)
    {
        $data['pegawai']= Pegawai::find($nip);
        return view('pegawai.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $pegawai=  Pegawai::find($nip);
        $pegawai->fill($request->all());
        $pegawai->update();
        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        $pegawai = Pegawai::find($nip)->delete();
        return redirect('pegawai');
    }
}
