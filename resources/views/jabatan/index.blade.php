@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('jabatan/create')}}" class="btn btn-info">Tambah Data Jabatan</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Kode Jabatan</th>
	                  <th>Nama Jabatan</th>
	                  <th>Gapok</th>
	                  <th>Tunjangan Jabatan</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($jabatan as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->kode_jabatan}}</td>
	                  <td>{{$data->nama_jabatan}}</td>
	                  <td>{{$data->gapok}}</td>
	                  <td>{{$data->tunjangan_jabatan}}</td>
	                  <td>
	                  	<a href="{{url('jabatan/edit/'.$data->kode_jabatan)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('jabatan/destroy/'.$data->kode_jabatan)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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