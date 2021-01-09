@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Data Karyawan')

@section('content')

<div class="container">

    <h2>Data Karyawan</h2> <hr style="margin-top: -10px;">

    <a href="?page=tambah_karyawan" class="btn btn-primary btn-sm">Tambah Data Karyawan</a>
    
    <div class="table-responsive tbl-master">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>NO</td>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Hari</th>
                    <th>Gaji</th>
                    <th>Uang Lembur/Kilo</th>
                    <th>BON</th>
                    <th>Jumlah lebih berat</th>
                    <th>Laporan</th>
                    <th>Laporan Gaji</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Rp</td>
                    <td>Rp</td>
                    <td>Rp</td>
                    <td></td>
                    <td>
                        <a href="?page=laporan-karyawan&id=" class="btn btn-primary btn-sm">Laporan Karyawan</a>

                    </td>
                    <td>
                        <a href="?page=laporan-karyawan1&ac=" class="btn btn-primary btn-sm">Gaji Karyawan</a>

                    </td>
                    <td>
                        <a href="include/karyawan/delete.php?id=" class="badge badge-danger">Delete</a>
                        <a href="index.php?page=editkaryawan&id=" class="badge badge-success">Edit</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

@endsection