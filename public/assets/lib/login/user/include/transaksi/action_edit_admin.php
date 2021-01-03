<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$nota = $_POST['nota'];	
	$id_karyawan = $_POST['id_karyawan'];
	$tgl_kerja = $_POST['tgl_kerja'];


	$edit = mysqli_query($conn, "UPDATE transaksi set id_karyawan = '$id_karyawan', tgl_kerja = '$tgl_kerja' where no_nota = '$nota'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=riwayat';
			</script>
		";
	}
}

 ?>