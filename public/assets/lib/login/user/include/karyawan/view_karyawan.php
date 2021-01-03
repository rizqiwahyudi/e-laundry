<div class="container">

	<h2>Data Karyawan</h2> <hr style="margin-top: -10px;">

	<a href="?page=tambah_karyawan" class="btn btn-primary btn-sm">Tambah Data Karyawan</a>
	
	<div class="table-responsive tbl-master">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<td>NO</td>
					<th>Nama</th>
					<th>Laporan</th>
					
				</tr>
			</thead>

			<tbody>
				<?php $i=1; $query = mysqli_query($conn, "SELECT * FROM karyawan"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['nama_karyawan'] ?></td>
					
					<td>
						<a href="?page=laporan-karyawan&id=<?php echo $row['id_karyawan']; ?>" class="btn btn-primary btn-sm">Laporan Karyawan</a>

					</td>
					
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>