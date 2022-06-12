@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penggajian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('penggajian/create')}}" class="btn btn-info" style="margin: 10px;">Tambah Data Penggajian</a>
              <a href="{{url('pencarian')}}" class="btn btn-info" style="margin: 10px;">Pencarian <i class="fa fa-search"></i></a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Bulan</th>
	                  <th>NIP</th>
	                  <th>Potongan</th>
	                  <th>Gaji Bersih</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($penggajian as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->bulan}}</td>
	                  <td>{{$data->nip}}</td>
	                  <td>{{$data->potongan}}</td>
	                  <td>{{$data->gaji_bersih}}</td>
	                  <td>
	                  	<a href="{{url('penggajian/destroy/'.$data->nip)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Hapus</i></a>
	                  </td>
	                </tr>
	                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection