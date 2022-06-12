<!DOCTYPE html>
<html>
<head>
	<title>Cetak</title>
</head>
<body onload="javascript:window.print()">

	<center>
		<table style="text-align: center;">
			<tr>
				<td><img src=""></td>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: center;">
						<h2>Laporan Penggajian</h2>
						<h2>PT. Java Anima</h2>
					</div>
				</td>
				<hr style="text-align: center">
				<td><img src=""></td>
			</tr>
		</table>
		<br>
		<table cellspacing="0" width="100%" border="1">
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
			@foreach($data as $query)
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
		<table style="text-align: center;">
			<tr>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: right;float: right;margin-left: 500px;margin-top: 25px;">
						Jepara, {{date('Y-m-d')}}
					</div>
				</td>
			</tr>
		</table>
		<table style="text-align: center;">
			<tr>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: center;float: right;margin-left: 520px;margin-top: 40px;">
						Admin
					</div>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>