@extends('template.main')
@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Golongan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('golongan/create')}}" class="btn btn-info">Tambah Data Golongan</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
	                <tr>
	                  <th>No</th>
	                  <th>Kode Golongan</th>
	                  <th>Nama Golongan</th>
	                  <th>Tunjangan Suami Istri</th>
	                  <th>Tunjangan Anak</th>
	                  <th>Uang Makan</th>
	                  <th>Uang Lembur</th>
	                  <th>Askes</th>
	                  <th>Aksi</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  @foreach($golongan as $data)
	                  <td>{{$loop->iteration}}</td>
	                  <td>{{$data->kode_golongan}}</td>
	                  <td>{{$data->nama_golongan}}</td>
	                  <td>{{$data->tunjangan_suami_istri}}</td>
	                  <td>{{$data->tunjangan_anak}}</td>
	                  <td>{{$data->uang_makan}}</td>
	                  <td>{{$data->uang_lembur}}</td>
	                  <td>{{$data->askes}}</td>
	                  <td>
	                  	<a href="{{url('golongan/edit/'.$data->kode_golongan)}}" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
	                  	<a href="{{url('golongan/destroy/'.$data->kode_golongan)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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