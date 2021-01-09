@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Pengeluaran')

@section('content')

<div class="container">
    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h2>Data Pengeluaran</h2>
            <hr style="margin-top: -10px;">
            <div class="panel-body">

                <a href="?page=tambahkeluaran" class="btn btn-primary btn-sm">Tambah Data Pengeluaran</a>
                <a href="?page=laporan_pengeluaran" class="btn btn-primary btn-sm">Laporan Pengeluaran</a>

                <div class="table-responsive tbl-master">
                    <table class="table table-bordered table-hover" id="myTable">
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
        </div>
    </div>
</div>

@endsection