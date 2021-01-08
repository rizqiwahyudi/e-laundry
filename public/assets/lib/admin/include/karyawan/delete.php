<?php 
include '../../koneksi.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$delete = mysqli_query($conn, "DELETE FROM karyawan where id_karyawan = '$id'");

	if ($delete) {
		echo "
			<script> alert('berhasil di hapus');
					window.location.href='../../index.php?page=karyawan';
			</script>";
	}
}

 ?>