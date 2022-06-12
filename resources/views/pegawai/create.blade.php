@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
      	<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambahkan Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('pegawai/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="text" class="form-control" id="nip" name="nip" placeholder="Mausukkan NIP">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan Nama Pegawai">
                </div>
                <div class="form-group">
                  <label for="inputPassword3">Nama Jabatan</label>
                    <select name="kode_jabatan" class="form-control" id="">
                      <option>Pilih Nama Jabatan</option>
                      @foreach ($jabatan as $data)
                        <option value="{{$data->kode_jabatan}}">{{$data->nama_jabatan}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" >Nama Golongan</label>
                    <select name="kode_golongan" class="form-control" id="">
                      <option>Pilih Nama Golongan</option>
                      @foreach ($golongan as $data)
                        <option value="{{$data->kode_golongan}}">{{$data->nama_golongan}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                  <select name="status" class="form-control" name="status" id="status" placeholder="Masukan Status">
                    <option>--pilih--</option>
                    <option value="Belum Menikah">Belum Nikah</option>
                    <option value="Nikah">Nikah</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jumlah Anak</label>
                  <select name="jumlah_anak" class="form-control" name="jumlah_anak" id="jumlah_anak" placeholder="Masukan Jumlah Anak">
                    <option>--pilih--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
              	<button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-primary pull-right">Tambahkan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
</section>
@endsection