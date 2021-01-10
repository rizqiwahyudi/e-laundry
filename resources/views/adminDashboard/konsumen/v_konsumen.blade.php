@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Konsumen')

@section('content')

<div class="container">

    <h2>Data Konsumen</h2>
    <hr style="margin-top: -10px;">

    <a href="{{ url('/dashboard/konsumen/create') }}" class="btn btn-primary btn-sm">Tambah Data konsumen</a>

    <div class="table-responsive tbl-master">
        <table class="table table-bordered table-hover" id="myTable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>nohp</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    </div>
</div>

@endsection