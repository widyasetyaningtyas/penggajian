@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
      	<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('pegawai/update/'.$pegawai->nip)}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" value="{{$pegawai->nip}}" class="form-control" id="nip" name="nip" placeholder="Masukan NIP">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pegawai</label>
                  <input type="text" value="{{$pegawai->nama_pegawai}}" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan Nama Pegawai">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode Jabatan</label>
                  <input type="text" value="{{$pegawai->kode_jabatan}}" class="form-control" id="kode_jabatan" name="kode_jabatan" placeholder="Masukan Kode Jabatan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kode Golongan</label>
                    <input type="text" value="{{$pegawai->kode_golongan}}" class="form-control" id="kode_golongan" name="kode_golongan" placeholder="Masukan Kode Golongan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <select name="status" value="{{$pegawai->status}}" class="form-control" name="status" id="status" placeholder="Masukan Status">
                    <option>--pilih--</option>
                    <option value="1">Belum Nikah</option>
                    <option value="2">Nikah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Anak</label><br>
                  <select name="status" class="form-control" value="{{$pegawai->jumlah_anak}}" name="status" id="status" placeholder="Masukan Status">
                    <option>--pilih--</option>
                    <option value="1">Satu</option>
                    <option value="2">Dua</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-primary pull-right">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>
@endsection