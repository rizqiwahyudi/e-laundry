<?php
include '../../koneksi.php';
header("Content-type: application/vnd-ms-sxcel");
header("Content-Disposition: attachment; filename=Data.xls");
?>

<CENTER>
	<H1>LAPORAN KARYAWAN</H1>
</CENTER>
<table border="1">

<tr>
	<th>No</th>
	<th>No Nota</th>
	<th>Nama Pelanggan</th>
	<th>Tanggal Pengerjaan</th>
	<th>Tanggal Transaksi</th>
	<th>Jenis Transaksi</th>
	<th>Berat</th>

</tr>

<?php
$tanggal = $_POST['tgl_awal_excel'];
$tanggal1 = $_POST['tgl_akhir_excel'];
$nama = $_POST['id13'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
<?php while($row = mysqli_fetch_array($q)) : ?>
	<tr>
				<td align="center"><?= $i++ ?></td>
				<td align="center"><?= $row['no_nota'] ?></td>
				<td align="center"><?= $row['nama_R'] ?></td>
				<td align="center"><?= date('d-m-Y', strtotime($row['tgl_kerja'])) ?></td>
				<td align="center"><?= date('d-m-Y', strtotime($row['tgl_transaksi'])) ?></td>
				<td align="center"><?= $row['jenis'] ?></td>
				<td align="center"><?= $row['berat']?></td>

</tr>
<?php endwhile; ?>

<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?="Rp.". $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>





