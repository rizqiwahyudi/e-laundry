@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Tambah Data Pengeluaran')

@section('content')

<div class="container">
    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h2>Data Pengeluaran</h2>
            <hr style="margin-top: -10px;">
            <div class="panel-body">

                <a href="{{ url('/dashboard/pengeluaran/create') }}" class="btn btn-primary btn-sm">Tambah Data Pengeluaran</a>
                <a href="{{ url('/dashboard/pengeluaran/laporan') }}" class="btn btn-primary btn-sm">Laporan Pengeluaran</a>

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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="include/pengeluaran/delete.php?id=" class="badge badge-danger">Delete</a>
                                    <a href="index.php?page=editpengeluaran&id=" class="badge badge-success">Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection