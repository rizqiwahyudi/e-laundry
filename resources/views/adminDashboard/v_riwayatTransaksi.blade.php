@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Riwayat Transaksi')

@section('content')

<div class="container">

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h2>Data Transaksi Penjualan</h2>
            <hr style="margin-top: -10px;">


            <div class="table-responsive tbl-master">
                <table class="table table-bordered table-hover" id="myTable">
                    <thead class="">
                        <tr>
                            <th>No</th>
                            <th>No Nota</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Transaksi</th>
                            <th>tanggal Selesai</th>
                            <th>tanggal Ambil</th>
                            <th>tanggal Lunas</th>
                            <th>Jenis Cucian</th>
                            <th>Berat Kg</th>
                            <th>Harga /Kg</th>
                            <th>Jumlah Bayar</th>
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

                    <tbody>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </tbody>
        </table>
    </div>
</div>

@endsection