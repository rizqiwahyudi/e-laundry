@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Absensi Karyawan')

@section('content')

<div class="container">

    <!-- absensi -->

    <div class="">
        <div class="card" style="background: white; padding: 10px;">
            <div class="card-body">
                <h2>Absen Karyawan</h2>
                <hr style="margin-top: -5px;">

            </div>
        </div>
    </div>

    <div class="card" style="background: white; padding: 10px; margin-top: 10px;">
        <div class="card-body">
            <h5>Datail Absensi</h5>
            <hr style="margin-top: -5px;">



            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive tbl-master">
                            <table class="table table-bordered table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
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
    </div>
</div>
<div class="card" style="background: white; padding: 10px; margin-top: 10px;">
    <div class="card-body">
        <h5>Laporan Absensi</h5>
        <hr style="margin-top: -5px;">



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive tbl-master">
                        <table class="table table-bordered table-hover">


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection