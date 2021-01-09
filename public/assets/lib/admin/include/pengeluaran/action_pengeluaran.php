<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$tanggal = $_POST['tanggal'];
	$nama = $_POST['nama'];
	$nominal = $_POST['nominal'];

	$insert = mysqli_query($conn, "INSERT INTO pengeluaran values(null, '$tanggal', '$nama', '$nominal')");
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=tambahkeluaran";
			</script>
		<?php
	}
}
 ?>