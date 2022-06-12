@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
      	<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambahkan Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('jabatan/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Jabatan</label>
                  <input type="text" class="form-control" id="kode_jabatan" name="kode_jabatan" placeholder="Mausukkan Kode Jabatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Jabatan</label>
                  <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" placeholder="Masukan Nama Jabatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Gapok</label>
                  <input type="text" class="form-control" id="gapok" name="gapok" placeholder="Masukan Gapok">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tunjangan Jabatan</label>
                  <input type="text" class="form-control" id="tunjangan_jabatan" name="tunjangan_jabatan" placeholder="Masukan Tunjangan Jabatan">
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