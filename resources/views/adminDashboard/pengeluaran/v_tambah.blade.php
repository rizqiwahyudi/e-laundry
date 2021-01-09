@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Tambah Data Pengeluaran')

@section('content')

<div class="container">

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Pengeluaran</h3>

        </div>
        <div class="panel-body">
            <form method="post" action="include/pengeluaran/action_pengeluaran.php">
                <div class="form-group">
                    <label>Tanggal Pengeluaran</label>
                    <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal" required="" value="<?= date('Y-m-d'); ?>">
                </div>
                <div class="form-group">
                    <label>Nama Pengeluaran</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label>Nominal Pengeluaran</label>
                    <input type="text" name="nominal" class="form-control" placeholder="Masukkan nominal">
                </div>
                <button name="simpan" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </form>
        </div>
    </div>
</div>
<a href="?page=pengeluran">Kuluar</a>
<div class="table-responsive tbl-master">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>NO</th>
                <th>Tanggal Pengeluaran</th>
                <th>Nama Pengeluaran</th>
                <th>Nominal Pengeluaran</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

        </tbody>
    </table>
</div>
</div>

@endsection