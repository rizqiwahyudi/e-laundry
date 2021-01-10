@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Laporan Data Pengeluaran')

@section('content')

<div class="container">

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class=""></i> Laporan Bulanan</h3>
        </div>
        <div class="panel-body">
            <form action="include/pengeluaran/harian.php" method="post">
                <input type="date" name="tgl_awal" value="<?= date('Y-m-d'); ?>" required class="form-control">
                <input type="date" name="tgl_akhir" value="<?= date('Y-m-d'); ?>" required class="form-control">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
            </form>

            <br>
            <div class="panel-heading">
            </div>
            <h3 class="panel-title"><i class=""></i> Laporan Harian</h3>
            <form action="include/pengeluaran/harian2.php" method="post">
                <input type="date" name="tgl" value="<?= date('Y-m-d'); ?>" required class="form-control">
                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
            </form>
        </div>

    </div>

</div>

@endsection