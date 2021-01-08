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
				<?php $i=1; $query = mysqli_query($conn, "SELECT * FROM karyawan"); ?>
				<?php while($row = mysqli_fetch_array($query)) : ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row['nama_karyawan'] ?></td>
					<td><?= $row['alamat_karyawan'] ?></td>
					<td><?= $row['no_tlp_karyawan'] ?></td>
					<td><?= $row['hari'] ?></td>
					<td>Rp.<?= number_format($row['gaji_karyawan']) ?></td>
					<td>Rp.<?= number_format($row['uang_lembur']) ?></td>
					<td>Rp.<?= number_format($row['utang'])  ?></td>
					<td><?= $row['lebih_berat']?></td>
					<td>
						<a href="?page=laporan-karyawan&id=<?php echo $row['id_karyawan']; ?>" class="btn btn-primary btn-sm">Laporan Karyawan</a>

					</td>
					<td>
						<a href="?page=laporan-karyawan1&ac=<?php echo $row['id_karyawan']; ?>" class="btn btn-primary btn-sm">Gaji Karyawan</a>

					</td>
					<td>
						<a href="include/karyawan/delete.php?id=<?= $row['id_karyawan'] ?>" class="badge badge-danger">Delete</a>
						<a href="index.php?page=editkaryawan&id=<?= $row['id_karyawan'] ?>" class="badge badge-success">Edit</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>