@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Transaksi')

@section('content')

<div class="container">

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-clock-o"></i> Data Transaksi Penjualan</h3>
            <div class="panel-body">
                <a href="{{ url('/dashboard/transaksi/create') }}" class="btn btn-primary btn-sm">Tambah Transaksi</a>
                <a href="{{ url('/dashboard/transaksi/laporan') }}" class="btn btn-primary btn-sm">LAPORAN</a>

                <div class="table-responsive tbl-master">
                    <table class="table table-bordered table-hover" id="myTable">
                        <thead class="">
                            <tr>
                                <th>No</th>
                                <th>No Nota</th>
                                <th>Nama Pelanggan</th>
                                <th>Tanggal Transaksi</th>
                                <th>tanggal Selesai</th>
                                <th>Tanggal Ambil</th>
                                <th>Tanggal Lunas</th>
                                <th>Tanggal Kerja</th>
                                <th>Jenis Cucian</th>
                                <th>Berat Kg</th>
                                <th>Harga /Kg</th>
                                <th>Jumlah bayar</th>
                                <th>Jumlah Total</th>
                                <th>Diskon</th>
                                <th>Jumlah Helai</th>
                                <th>Status Pembayaran</th>
                                <th>Status Pengerjaan</th>
                                <th>Status Karyawan Pengerjaan</th>
                                <th>Catatan</th>
                                <th>Nota</th>
                                <th>aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection