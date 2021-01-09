@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-home"></i> Transaksi Hari Ini</h3>
                </div>
                <div class="panel-body">
                    <h2 id="transaksiharini"></h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-border panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-home"></i> Seluruh Transaksi</h3>
                </div>
                <div class="panel-body">
                    <h2 id="tmptransaksi"></h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection