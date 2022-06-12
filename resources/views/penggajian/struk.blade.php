<!DOCTYPE html>
<html>
<head>
	<title>Struk</title>
	<style type="text/css">
		body{
			font-family: Courier New;
		}
		.kotak{
			margin-left: 20px;
			width: 420px;
		}
		.header{
			text-align: center;
			line-height: 0.5;
		}
		.header p{
			font-size: 11px;
		}
		.bagian-1{
			display: flex;
			margin-top: 15px;
			margin-bottom: 15px;
			line-height: 1.3;
			font-size: 15px;
		}
		.bagian-1 ul{
			display: contents;
		}
		.bagian-1 ul li{
			display: block;
		}
		
		.bagian-3{
			display: flex;
			margin-top: 15px;
			margin-bottom: 15px;
			line-height: 1.3;
			font-size: 15px;
		}
		.bagian-3 ul{
			display: contents;
		}
		.bagian-3 ul li{
			display: block;
		}
		.bagian-4{
			display: flex;
			margin-top: 15px;
			margin-bottom: 15px;
			line-height: 1.3;
			font-size: 15px;
		}
		.bagian-4 ul{
			display: contents;
		}
		.bagian-4 ul li{
			display: block;
		}
		.footer{
			text-align: center;
			margin-top: 40px;
			line-height: 0.3;
		}
		.footer h3{
			font-weight: bold;
			font-size: 20px;
		}
		hr{
			border: 0.5px solid;
		}
	</style>
</head>
<body onload="javascript:window.print()">
	<div class="container">
		<div class="kotak">
			@foreach($query as $data)
			<div class="header">
				<h3>Slip Gaji</h3>
				<h3>PT. Java Anima</h3>
			</div><br>
			<hr>
			<div class="bagian-1">
				<div class="left">
					<ul>
						<li>Tanggal</li>
					</ul>
				</div>
				<div class="right" style="text-align: right; margin-left: 190px;">
					<ul>
						<li>Jepara, {{date('d-m-Y')}}</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="bagian-2">
				<div class="bagian-3">
				<div class="left" style="text-align: left; font-weight: bold;">
					<ul>
						<li>NIP</li>
						<li>Nama Pegawai</li>
						<li>Nama Jabatan</li>
						<li>Nama Golongan</li>
					</ul>
				</div>
				<div class="right" style="text-align: right; margin-left: 130px;">
					<ul>
						<li>{{Request::get('nip')}}</li>
						<li>{{Request::get('nama_pegawai')}}</li>
						<li>{{Request::get('nama_jabatan')}}</li>
						<li>{{Request::get('nama_golongan')}}</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="bagian-3">
				<div class="left" style="text-align: left; font-weight: bold;">
					<ul>
						<li>Tunjangan Jabatan</li>
						<li>Tunjangan Suami/Istri</li>
						<li>Tunjangan Anak</li>
						<li>Uang Makan</li>
						<li>Uang Lembur</li>
						<li>Askes</li>
						<li>Potongan</li>
					</ul>
				</div>
				<div class="center" style="text-align: right; margin-left: 90px;">
					<ul>
						<li>Rp.</li>
						<li>Rp.</li>
						<li>Rp.</li>
						<li>Rp.</li>
						<li>Rp.</li>
						<li>Rp.</li>
						<li>Rp.</li>
					</ul>
				</div>
				<div class="right" style="text-align: right; margin-left: 50px;">
					<ul>
						<li>{{Request::get('tunjangan_jabatan')}}</li>
						<li>{{Request::get('tunjangan_suami_istri')}}</li>
						<li>{{Request::get('tunjangan_anak')}}</li>
						<li>{{Request::get('uang_makan')}}</li>
						<li>{{Request::get('uang_lembur')}}</li>
						<li>{{Request::get('askes')}}</li>
						<li>{{Request::get('potongan')}}</li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="bagian-4">
				<div class="left" style="text-align: left; font-weight: bold;">
					<ul>
						<li>Gaji Bersih</li>
					</ul>
				</div>
				<div class="center" style="text-align: right; margin-left: 180px;">
					<ul>
						<li>Rp.</li>
					</ul>
				</div>
				<div class="right" style="text-align: right; margin-left: 40px;">
					<ul>
						<li>{{Request::get('gaji_bersih')}}</li>
					</ul>
				</div>
			</div>
			<hr>
			<div>
				<tr>
					<td style="font-family: sans-serif;text-align: center;">
						<div style="text-align: center;float: right;margin-left: 220px;margin-top: 20px;">
							TTD
						</div>
					</td>
				</tr>
			</div>
			<div>
				<tr>
					<td style="font-family: sans-serif;text-align: center;">
						<div style="text-align: center;float: right;margin-left: 220px;margin-top: 40px;">
							Admin
						</div>
					</td>
				</tr>
			</div>
			<br>
			@endforeach
		</div>
	</div>
</body>
</html>