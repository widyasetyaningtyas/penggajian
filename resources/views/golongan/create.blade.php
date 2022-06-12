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
            <form role="form" action="{{url('golongan/store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Golongan</label>
                  <input type="text" class="form-control" id="kode_golongan" name="kode_golongan" placeholder="Mausukkan Kode Golongan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Golongan</label>
                  <input type="text" class="form-control" id="nama_golongan" name="nama_golongan" placeholder="Masukan Nama Golongan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tunjangan Suami Istri</label>
                  <input type="text" class="form-control" id="tunjangan_suami_istri" name="tunjangan_suami_istri" placeholder="Masukan Tunjangan Suami Istri">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tunjangan Anak</label>
                  <input type="text" class="form-control" id="tunjangan_anak" name="tunjangan_anak" placeholder="Masukan Tunjangan Anak">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Uang Makan</label>
                  <input type="text" class="form-control" id="uang_makan" name="uang_makan" placeholder="Masukan Uang Makan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Uang Lembur</label>
                  <input type="text" class="form-control" id="uang_lembur" name="uang_lembur" placeholder="Masukan Uang Lembur">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Askes</label>
                  <input type="text" class="form-control" id="askes" name="askes" placeholder="Masukan Askes">
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