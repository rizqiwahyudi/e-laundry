<?php

$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];
$q = mysqli_query($conn, "SELECT sum(transaksi.berat) tb from transaksi left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan where transaksi.id_karyawan='23' and transaksi.tgl_transaksi between '$tgl_awal' and '$tgl_akhir'");
$d = mysqli_fetch_array($q);
$qu = mysqli_query($conn, "SELECT * FROM karyawan where id_karyawan='23'");
$da = mysqli_fetch_array($qu);
if ($d['tb'] > 30) {
	$sisa = $d['tb'] - 30;
	$uang_lembur = $da['uang_lembur'] * $sisa;
	$total_gaji = ($da['gaji_karyawan'] + $uang_lembur) - $da['utang'];
}else {
	$total_gaji = $da['gaji_karyawan'] - $da['utang'];
}
?>