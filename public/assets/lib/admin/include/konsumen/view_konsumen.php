<div class="container">

	<h2>Data Konsumen</h2> <hr style="margin-top: -10px;">

	<a href="?page=tambahkonsumen" class="btn btn-primary btn-sm">Tambah Data konsumen</a>

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
				<?php $i=1; $query = mysqli_query($conn, "SELECT * FROM konsumen"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['nama'] ?></td>
					<td><?= $row['alamat_konsumen'] ?></td>
					<td><?= $row['ttl_konsumen'] ?></td>
					<td><?= $row['nohp_konsumen'] ?></td>
					<td>
						<a href="include/konsumen/delete.php?id=<?= $row['id_konsumen'] ?>" class="badge badge-danger" onclick="return confirm ('yakin ?');">Delete</a>
						<a href="index.php?page=editkonsumen&id=<?= $row['id_konsumen'] ?>" class="badge badge-success">Edit</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>