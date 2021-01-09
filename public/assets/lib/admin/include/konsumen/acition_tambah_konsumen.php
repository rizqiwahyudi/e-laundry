<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$ttl = $_POST['ttl'];
	$nohp = $_POST['nohp'];

	$insert = mysqli_query($conn, "INSERT INTO konsumen values(null, '$nama', '$alamat', '$ttl', '$nohp')");
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=konsumen";
			</script>
		<?php
	}
}
 ?>