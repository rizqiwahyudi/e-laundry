
<div class="container">
<div class="panel panel-border panel-primary">
	<div class="panel-heading"> 
	<h2>Data Pengeluaran</h2> <hr style="margin-top: -10px;">
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
			<?php
			 $i=1; $query = mysqli_query($conn, "SELECT * FROM pengeluaran"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['tanggal'] ?></td>
					<td><?= $row['nama_pengeluaran'] ?></td>
					<td><?= number_format($row['nominal']) ?></td>
					<td>
						<a href="include/pengeluaran/delete.php?id=<?= $row['id_pengeluaran'] ?>" class="badge badge-danger">Delete</a>
						<a href="index.php?page=editpengeluaran&id=<?= $row['id_pengeluaran'] ?>" class="badge badge-success">Edit</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
</div>