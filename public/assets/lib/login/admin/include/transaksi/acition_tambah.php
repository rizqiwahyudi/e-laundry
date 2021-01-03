<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$tanggal_transaksi = $_POST['tanggal_transaksi'];
	$tanggal_selesai = $_POST['tanggal_selesai'];
	$master = $_POST['master']; 
	$berat = $_POST['berat'];
	$jumlah_bayar1 = $_POST['jumlah_bayar1'];
	$jumlah_bayar = $_POST['jumlah_bayar'];
	$jumlah_helai = $_POST['jumlah_helai'];
	$diskon = $_POST['diskon'];
	$id_karyawan = '1';
	$status_pembayaran = $_POST['status_pembayaran'];
	$status_pengambilan = $_POST['status_pengambilan'];
	$catatan = $_POST['catatan'];
	$tgl = date('Y-m-d');
	
	if ($status_pembayaran == 'Lunas') {
		$insert = mysqli_query($conn, "INSERT INTO transaksi values(null,'-', '$nama', '$master', '$id_karyawan', '$tanggal_transaksi', '$tanggal_selesai', '$berat', '$jumlah_bayar', '$diskon', '$jumlah_helai', '$status_pembayaran', '$status_pengambilan', '$catatan', '$tgl', '0000-00-00', '$jumlah_bayar1', '0000-00-00')");
	}else {
		$insert = mysqli_query($conn, "INSERT INTO transaksi values(null,'-', '$nama', '$master', '$id_karyawan', '$tanggal_transaksi', '$tanggal_selesai', '$berat', '$jumlah_bayar', '$diskon', '$jumlah_helai', '$status_pembayaran', '$status_pengambilan', '$catatan', '0000-00-00', '0000-00-00', '$jumlah_bayar1', '0000-00-00')");
	}

	
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=transaksi";
			</script>
		<?php
	} else {
		?>
			<script type="text/javascript">
				alert('Gagal');
				window.location.href="../../index.php?page=transaksi";
			</script>
		<?php
	}
}
?>