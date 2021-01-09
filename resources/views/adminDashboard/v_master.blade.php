@extends('layout.v_mainAdminDashboard')

@section('title', 'Dashboard | Master')

@section('content')


<div class="container">

	<h2>Data Master</h2> <hr style="margin-top: -10px;">

	<a href="?page=tambah_master"  class="btn btn-primary btn-sm">Tambah Master</a>

	<div class="table-responsive tbl-master">
		<table class="table table-bordered table-hover">
			<thead class="">
				<tr>
					<th>No</th>
					<th>Jenis</th>
					<th>harga</th>
					<th>Status</th>
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
						<a href="include/master/delete.php?id=" class="badge badge-danger">Delete</a>
						<a href="index.php?page=editmaster&id=" class="badge badge-success">Edit</a>
					</td>
					</td>				
				</tr>
				
			</tbody>
		</table>
	</div>
</div>

@endsection