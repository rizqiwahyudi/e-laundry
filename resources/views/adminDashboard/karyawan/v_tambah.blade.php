@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Tambah Data Karyawan')

@section('content')

<div class="container">

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Karyawan</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="include/karyawan/action_tambah.php">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" name="nohp" class="form-control" placeholder="Masukkan No Hp">
                </div>
                <div class="form-group">
                    <label>Masukkan Hari</label>
                    <input type="text" name="hari" class="form-control" placeholder="Masukkan Gaji">
                </div>
                <div class="form-group">
                    <label>gaji</label>
                    <input type="text" name="gaji" class="form-control" placeholder="Masukkan Gaji">
                </div>
                <div class="form-group">
                    <label>Uang Lembur</label>
                    <input type="text" name="uang" class="form-control" value="2000">
                </div>
                <div class="form-group">
                    <label>BON</label>
                    <input type="text" name="utang" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Lebih Berat</label>
                    <input type="text" name="lebih_berat" class="form-control" value="">
                </div>
                <button name="simpan" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </form>
        </div>

    </div>

</div>

@endsection