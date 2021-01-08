<?php 

include '../../koneksi.php';
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$hari = $_POST['hari'];
	$gaji = $_POST['gaji'];
	$uang = $_POST['uang'];
	$utang = $_POST['utang'];
	$lebih_berat = $_POST['lebih_berat'];

	$edit = mysqli_query($conn, "UPDATE karyawan set nama_karyawan = '$nama', alamat_karyawan = '$alamat', no_tlp_karyawan = '$nohp', hari = '$hari', gaji_karyawan = '$gaji', uang_lembur = '$uang', utang = '$utang', lebih_berat = '$lebih_berat' where id_karyawan = '$id'");

	if ($edit) {
		echo "
			<script>
				alert('data berhasil di ubah');
				window.location.href='../../index.php?page=karyawan';
			</script>
		";
	}
	else {
		echo "gagal disimpan";
	}
}

 ?>