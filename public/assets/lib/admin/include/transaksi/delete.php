<?php 
include '../../koneksi.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$delete = mysqli_query($conn, "DELETE FROM transaksi where no_nota = '$id'");

	if ($delete) {
		echo "
			<script> alert('berhasil di hapus');
					window.location.href='../../index.php?page=transaksi';
			</script>";
	}
}

 ?>