<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];

	$edit = mysqli_query($conn, "UPDATE master set jenis = '$jenis', harga = '$harga' where id_master = '$id'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=master';
			</script>
		";
	}
}

 ?>