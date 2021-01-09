<?php 
include '../../koneksi.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$delete = mysqli_query($conn, "DELETE FROM master where id_master = '$id'");

	if ($delete) {
		echo "
			<script> alert('berhasil di hapus');
					window.location.href='../../index.php?page=master';
			</script>";
	}
}

 ?>