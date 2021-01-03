<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$tanggal = $_POST['tanggal'];
	$nama = $_POST['nama'];
	$nominal = $_POST['nominal'];

	$edit = mysqli_query($conn, "UPDATE pengeluaran set tanggal = '$tanggal', nama_pengeluaran = '$nama', nominal = '$nominal' where id_pengeluaran = '$id'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=tambahkeluaran';
			</script>
		";
	}
	else {
		echo "gagal disimpan";
	}
}

 ?>