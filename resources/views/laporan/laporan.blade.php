@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Laporan Penggajian</h3>
				</div>

				<div class="box-body">
					<form class="navbar-form" role="search" action="{{url('laporan')}}">
						<div class="form-group">
							<a href="{{url('/laporan/cetak?bulan='.Request::get('bulan'))}}" class="btn btn-primary" style="float: right;margin: 0 0 0 20px;" target="_blank">Cetak</a>
							<select class="form-control" name="bulan">
								<option value="01">Januari</option>
								<option value="02">Febuari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember	</option>
							</select>
							<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
					<table id="example2" class="table table-bordered table-hover">
						<tr>
							<th>No</th>
			                <th>NIP</th>
			                <th>Nama Pegawai</th>
			                <th>Nama Jabatan</th>
			                <th>Nama Golongan</th>
			                <th>Gaji Pokok</th>
			                <th>Tunjangan Jabatan</th>
			                <th>Tunjangan Suami Istri</th>
			                <th>Tunjangan Anak</th>
			                <th>Uang Makan</th>
			                <th>Uang Lembur</th>
			                <th>Askes</th>
			                <th>Potongan</th>
			                <th>Gaji Bersih</th>
						</tr>
						@foreach ($data as $query)
						<tr>
							<td>{{$loop->iteration}}</td>
			                <td>{{$query->nip}}</td>
			                <td>{{$query->nama_pegawai}}</td>
			                <td>{{$query->nama_jabatan}}</td>
			                <td>{{$query->nama_golongan}}</td>
			                <td>{{$query->gapok}}</td>
			                <td>{{$query->tunjangan_jabatan}}</td>
			                <td>{{$query->tunjangan_suami_istri}}</td>
			                <td>{{$query->tunjangan_anak}}</td>
			                <td>{{$query->uang_makan}}</td>
			                <td>{{$query->uang_lembur}}</td>
			                <td>{{$query->askes}}</td>
			                <td>{{$query->potongan}}</td>
			                <td>{{$query->gaji_bersih}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection