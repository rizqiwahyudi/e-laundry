<?php 
include '../../koneksi.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$tanggal = date('Y-m-d');

	$updateLunas = mysqli_query($conn, "UPDATE transaksi SET status_pembayaran = 'Lunas', tgl_lunas = '$tanggal' where no_nota = '$id'");
	if ($updateLunas) {
		echo "
			<script> alert('berhasil di update');
					window.location.href='../../index.php?page=transaksi';
			</script>";
	}
}

 ?>