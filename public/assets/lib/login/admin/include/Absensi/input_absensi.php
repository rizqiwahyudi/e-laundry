
<?php 
include '../../koneksi.php';
date_default_timezone_set("Asia/Jakarta");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$tanggal = date('d-m-Y');
	$waktu = date('H:i:s');

	$validasi = mysqli_query($conn, "SELECT * from absensi where id_karyawan = '$id' and tgl_absensi = '$tanggal'");
	$count = mysqli_num_rows($validasi);
	if ($count > 1) {
		echo "
			<script>
				alert('Anda Sudah Absen Hari ini');
				window.location.href='../../index.php?page=absensi';
			</script>
		";
	} else {
		$input = mysqli_query($conn, "INSERT INTO absensi values(null, '$id', '$tanggal', '$waktu')");
		if ($input) {
			echo "
				<script>
					alert('Berhasil input Absen');
					window.location.href='../../index.php?page=absensi';
				</script>
			";
		}
	}
}

 ?>