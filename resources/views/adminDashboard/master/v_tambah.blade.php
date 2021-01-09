@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Tambah Data Master')

@section('content')

<div class="container">

    <div class="panel panel-border panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Master </h3>
        </div>
        <div class="panel-body">
            <form method="post" action="include/master/action.php">
                <div class="form-group">
                    <label>Jenis Cucian</label>
                    <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis Cucian">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="pcs">Pcs</option>
                        <option value="kg">Kg</option>
                    </select>
                </div>

                <button name="simpan" class="btn btn-primary waves-effect waves-light">Simpan</button>
            </form>
        </div>

    </div>

</div>

@endsection