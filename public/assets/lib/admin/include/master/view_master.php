
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
				<?php $i=1; $query = mysqli_query($conn, "SELECT * FROM master"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['jenis'] ?></td>
					<td>RP.<?= number_format($row['harga']) ?></td>
					<td><?= $row['status'] ?></td>
					<td>
						<a href="include/master/delete.php?id=<?= $row['id_master'] ?>" class="badge badge-danger">Delete</a>
						<a href="index.php?page=editmaster&id=<?= $row['id_master'] ?>" class="badge badge-success">Edit</a>
					</td>
					</td>				
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>