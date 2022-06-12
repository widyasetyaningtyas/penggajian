@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('pegawai/create')}}" class="btn btn-info">Tambah Data pegawai</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>NIP</th>
	                  <th>Nama Pegawai</th>
	                  <th>Kode Jabatan</th>
	                  <th>Kode Golongan</th>
	                  <th>Status</th>
	                  <th>Jumlah Anak</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($pegawai as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->nip}}</td>
	                  <td>{{$data->nama_pegawai}}</td>
	                  <td>{{$data->kode_jabatan}}</td>
	                  <td>{{$data->kode_golongan}}</td>
	                  <td>{{$data->status}}</td>
	                  <td>{{$data->jumlah_anak}}</td>
	                  <td>
	                  	<a href="{{url('pegawai/edit/'.$data->nip)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('pegawai/destroy/'.$data->nip)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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