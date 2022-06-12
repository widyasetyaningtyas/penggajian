<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Golongan;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['golongan'] = Golongan::get();
        return view('golongan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $golongan = new Golongan;
        $golongan->fill($request->all());
        $golongan->save();
        return redirect('golongan');
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
    public function edit($kode_golongan)
    {
        $data['golongan']= Golongan::find($kode_golongan);
        return view('golongan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_golongan)
    {
        $golongan=  Golongan::find($kode_golongan);
        $golongan->fill($request->all());
        $golongan->update();
        return redirect('golongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_golongan)
    {
        $golongan = Golongan::find($kode_golongan)->delete();
        return redirect('golongan');
    }
}
