<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$nohp = $_POST['nohp'];

	$edit = mysqli_query($conn, "UPDATE konsumen set nama = '$nama', alamat_konsumen = '$alamat', ttl_konsumen = '$ttl', nohp_konsumen = '$nohp' where id_konsumen = '$id'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=konsumen';
			</script>
		";
	}
	else {
		echo "gagal disimpan";
	}
}

 ?>