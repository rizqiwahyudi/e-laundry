<?php 
include '../../koneksi.php';
if (isset($_POST['simpan'])) {
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$hari = $_POST['hari'];
	$gaji = $_POST['gaji'];
	$uang = $_POST['uang'];
	$utang = $_POST['utang'];
	$lebih_berat = $_POST['lebih_berat'];
	

	$insert = mysqli_query($conn, "INSERT INTO karyawan values(null, '$nama', '$alamat', '$nohp', '$hari', '$gaji', '$uang', '$utang', '$lebih_berat')");
	if ($insert) {
		?>
			<script type="text/javascript">
				alert('Data Berhasil Disimpan');
				window.location.href="../../index.php?page=karyawan";
			</script>
		<?php
	}
}
 ?>