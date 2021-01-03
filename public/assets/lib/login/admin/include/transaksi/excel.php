<?php
include '../../koneksi.php';
header("Content-type: application/vnd-ms-sxcel");
header("Content-Disposition: attachment; filename=Data.xls");
?>

<CENTER>
	<H1>LAPORAN PENERIMAAN</H1>
</CENTER>
<table border="1">

<tr>
	<th>No</th>
	<th>No Nota</th>
	<th>Nama Pelanggan</th>
	<th>Tanggal Transaksi</th>
	<th>Jenis Cucian</th>
	<th>Berat</th>
	<th>Tanggal Lunas</th>
	<th>Status pengembalian</th>
	<th>Jumlah Bayar</th>
</tr>

<?php

$a = $_POST['tgl_awalexcel'];
$b = $_POST['tgl_akhirexcel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.status_pembayaran = 'Lunas' and transaksi.tgl_lunas between '$a' and '$b' order by nama_karyawan ASC"); ?>
<?php while($row = mysqli_fetch_array($qu)) : ?>
	<tr>
				<td align="center"><?= $i++ ?></td>
				<td align="center"><?= $row['no_nota'] ?></td>
				<td align="center"><?= $row['nama_R'] ?></td>
				<td align="center"><?= date('d-m-Y', strtotime($row['tgl_transaksi'])) ?></td>
				<td align="center"><?= $row['jenis'] ?></td>
				<td align="center"><?= $row['berat']?></td>
				<td align="center"><?= $row['tgl_lunas']?></td>
				<td align="center"><?= $row['status_pengambilan'] ?></td>
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *,sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.status_pembayaran = 'Lunas' and transaksi.tgl_lunas between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="8" align="center">Pendapatan Kotor</td>
	<td align="center"><?="Rp.". $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>


<?php
$w = mysqli_query($conn, "SELECT *,sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.status_pembayaran = 'Lunas' and transaksi.tgl_lunas between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="8" align="center">Jumlah Berat</td>
	<td align="center"><?= $row1['br']. " Kg" ?></td>
</TR>
<?php endwhile; ?>


<?php
$w = mysqli_query($conn, "SELECT sum(nominal) as t_p from pengeluaran where tanggal between '$a' and '$b'");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="8" align="center">Jumlah Pengeluaran</td>
	<td align="center"><?="Rp. ". $row1['t_p'] ?></td>
</TR>
<?php endwhile; ?>

<?php
$q = mysqli_query($conn, "SELECT *,sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.status_pembayaran = 'Lunas' and transaksi.tgl_lunas between '$a' and '$b' order by nama_karyawan ASC");
$da = mysqli_fetch_array($q);
$q1 = mysqli_query($conn, "SELECT sum(nominal) as t_p from pengeluaran where tanggal between '$a' and '$b'");
$da1 = mysqli_fetch_array($q1);

$pb = $da['jml'] - $da1['t_p'];
?>
<TR>
	<td colspan="8" align="center">Pendepatan Beresih</td>
	<td align="center"><?php echo "Rp.". $pb ?></td>
</TR>






