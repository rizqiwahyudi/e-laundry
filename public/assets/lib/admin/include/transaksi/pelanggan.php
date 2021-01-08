<?php
include '../../koneksi.php';
header("Content-type: application/vnd-ms-sxcel");
header("Content-Disposition: attachment; filename=Data.xls");
?>

<CENTER>
	<H1>LAPORAN TRANSAKSI</H1>
</CENTER>
<table border="1">

<tr>
	<th>No</th>
	<th>No Nota</th>
	<th>Nama Pelanggan</th>
	<th>Tanggal Transaksi</th>
	<th>Jenis Cucian</th>
	<th>Berat</th>
	<th>Status pengembalian</th>
	<th>Status Pembayaran</th>
	<th>Jumlah Bayar</th>
</tr>

<?php

$m = $_POST['nama'];
$a = $_POST['pelanggan'];
$b = $_POST['pelanggan1'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$m' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
<?php while($row = mysqli_fetch_array($qu)) : ?>
	<tr>
				<td align="center"><?= $i++ ?></td>
				<td align="center"><?= $row['no_nota'] ?></td>
				<td align="center"><?= $row['nama_R'] ?></td>
				<td align="center"><?= date('d-m-Y', strtotime($row['tgl_transaksi'])) ?></td>
				<td align="center"><?= $row['jenis'] ?></td>
				<td align="center"><?= $row['berat']?></td>
				<td align="center"><?= $row['status_pengambilan'] ?></td>
				<td align="center"><?= $row['tgl_lunas']?></td>
				<td align="center"><?= number_format($row['jumlah_bayar'])?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$m' and transaksi.tgl_transaksi between '$a' and '$b' order by transaksi.tgl_transaksi ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?= $row1['br'] ?></td>
</TR>
<?php endwhile; ?>

<?php
$w = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as bra FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$m' and transaksi.tgl_transaksi between '$a' and '$b' order by transaksi.tgl_transaksi ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="8" align="center">Jumlah berat</td>
	<td align="center"><?= number_format($row1['bra']) ?></td>
</TR>
<?php endwhile; ?>








