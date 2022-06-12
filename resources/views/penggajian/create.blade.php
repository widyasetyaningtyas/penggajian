@extends('template.main')
@section('content')
<section class="content-header">
      <h1>
        Tambah Data Penggajian
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tambah Data Penggajian</li>
      </ol>
</section>
<section class="content">
	<div class="box">
        <div class="box-body">
        	<div class="row">
        		<form role="form" action="{{url('penggajian/store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="col-md-12">
                        <h2 style="text-align: center; font-family: serif;"><b>Penggajian</b></h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>No Penggajian</label>
                            <input type="text" class="form-control" id="id" name="id" readonly value="{{$nomat}}" placeholder="">
                        </div>
                    </div>
        			<div class="col-md-4">
            			<div class="form-group">
            				<label>NIP</label>
            				<input type="text" id="nip" name="nip" class="form-control" placeholder="Masukan NIP" onkeyup="master_gaji()">
            			</div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Pegawai</label>
                            <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" id="status" readonly onkeyup="status()">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Jumlah Anak</label>
                            <input type="text" name="jumlah_anak" class="form-control" id="jumlah_anak" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Jabatan</label>
                            <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Golongan</label>
                            <input type="text" name="nama_golongan" class="form-control" id="nama_golongan" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tunjangan Jabatan</label>
                            <input type="text" name="tunjangan_jabatan" class="form-control" id="tunjangan_jabatan" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tunjangan Suami Istri</label>
                            <input type="text" name="tunjangan_suami_istri" class="form-control" id="tunjangan_suami_istri" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tunjangan Anak</label>
                            <input type="text" name="tunjangan_anak" class="form-control" id="tunjangan_anak" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Uang Makan</label>
                            <input type="text" name="uang_makan" class="form-control" id="uang_makan" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Uang Lembur</label>
                            <input type="text" name="uang_lembur" class="form-control" id="uang_lembur" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Askes</label>
                            <input type="text" name="askes" class="form-control" id="askes" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gaji Pokok</label>
                            <input type="text" name="gapok" class="form-control" id="gapok" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Bulan</label>
                            <input type="text" name="bulan" class="form-control" id="bulan" value="{{date('Y-m-d')}}" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Potongan</label>
                            <input type="text" name="potongan" class="form-control" id="potongan" placeholder="Masukan Potongan" onkeyup="total()">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Gaji Bersih</label>
                            <input type="text" name="gaji_bersih" class="form-control" id="gaji_bersih" readonly>
                        </div>
                    </div>
                    <button class="btn btn-success pull-right" style="margin-right: 15px; margin-top: 20px;" onclick="store()">Simpan Transaksi</button>
        		</form>
        	</div>
        </div>
    </div>
</section>
@endsection
@push('bottom')
<script type="text/javascript">
    function master_gaji(){
        iddd = $("#nip").val()
        if (iddd==''){
            $('#nama_pegawai').val('');
            $('#status').val('');
            $('#jumlah_anak').val('');
            $('#nama_jabatan').val('');
            $('#nama_golongan').val('');
            $('#tunjangan_jabatan').val('');
            $('#tunjangan_suami_istri').val('');
            $('#tunjangan_anak').val('');
            $('#uang_makan').val('');
            $('#uang_lembur').val('');
            $('#askes').val('');
            $('#gapok').val('');
            $('#potongan').val('');
            $('#gaji_bersih').val('');
        }
        $.ajax({
            url:"{{route('penggajian/cari')}}",
            type:"GET",
            dataType:"json",
            data:{
                id:$("#nip").val()
            },
            success:function(hasil){
                if (hasil.val==0) {
                    // alret('Data tidak di temukan');
                    $('#nama_pegawai').val('');
                    $('#status').val('');
                    $('#jumlah_anak').val('');
                    $('#nama_jabatan').val('');
                    $('#nama_golongan').val('');
                    $('#tunjangan_jabatan').val('');
                    $('#tunjangan_suami_istri').val('');
                    $('#tunjangan_anak').val('');
                    $('#uang_makan').val('');
                    $('#uang_lembur').val('');
                    $('#askes').val('');
                    $('#gapok').val('');
                    $('#potongan').val('');
                    $('#gaji_bersih').val('');

                }else if(hasil.val==2){
                    // alret('Data tidak di temukan 2');
                    $('#nama_pegawai').val('');
                    $('#status').val('');
                    $('#jumlah_anak').val('');
                    $('#nama_jabatan').val('');
                    $('#nama_golongan').val('');
                    $('#tunjangan_jabatan').val('');
                    $('#tunjangan_suami_istri').val('');
                    $('#tunjangan_anak').val('');
                    $('#uang_makan').val('');
                    $('#uang_lembur').val('');
                    $('#askes').val('');
                    $('#gapok').val('');
                    $('#potongan').val('');
                    $('#gaji_bersih').val('');
                }else{
                    // alret('Data tidak di temukan 3');
                    $('#nama_pegawai').val(hasil.data.nama_pegawai);
                    $('#status').val(hasil.data.status);
                    $('#jumlah_anak').val(hasil.data.jumlah_anak);
                    $('#nama_jabatan').val(hasil.data.jabatan.nama_jabatan);
                    $('#nama_golongan').val(hasil.data.golongan.nama_golongan);
                    $('#tunjangan_jabatan').val(hasil.data.jabatan.tunjangan_jabatan);
                    $('#tunjangan_suami_istri').val(hasil.data.golongan.tunjangan_suami_istri);
                    $('#tunjangan_anak').val(hasil.data.golongan.tunjangan_anak);
                    $('#uang_makan').val(hasil.data.golongan.uang_makan);
                    $('#uang_lembur').val(hasil.data.golongan.uang_lembur);
                    $('#askes').val(hasil.data.golongan.askes);
                    $('#gapok').val(hasil.data.jabatan.gapok);
                    $('#potongan').val(hasil.data.master_gaji.potongan);
                    $('#gaji_bersih').val(hasil.data.master_gaji.gaji_bersih);
                }
            }
        });
    }

    function total(){
        var gapok=document.getElementById('gapok').value;
        var tunjangan_jabatan=document.getElementById('tunjangan_jabatan').value;
        var tunjangan_anak=document.getElementById('tunjangan_anak').value;
        var tunjangan_suami_istri=document.getElementById('tunjangan_suami_istri').value;
        var uang_makan=document.getElementById('uang_makan').value;
        var uang_lembur=document.getElementById('uang_lembur').value;
        var askes=document.getElementById('askes').value;
        var potongan=document.getElementById('potongan').value;

        var total= parseInt(gapok) + parseInt(tunjangan_jabatan) + parseInt(tunjangan_anak) + parseInt(tunjangan_suami_istri) + parseInt(uang_makan) + parseInt(uang_lembur) + parseInt(askes) - parseInt(potongan);
        document.getElementById('gaji_bersih').value=total;
    }

</script>
@endpush
