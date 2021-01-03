<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$jenis = $_POST['jenis'];
	$harga = $_POST['harga'];
	$status = $_POST['status'];

	$insert = mysqli_query($conn, "INSERT INTO master values(null, '$jenis', '$harga', '$status')");
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=master";
			</script>
		<?php
	}
}
 ?>