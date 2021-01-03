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
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='1' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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
<br>

<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='1' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>

<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='2' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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
<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='2' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>

<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='3' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='3' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='4' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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
<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='4' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='5' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='5' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='6' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='6' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='7' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='7' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='8' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='8' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='9' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='9' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='10' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='10' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='12' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='12' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='16' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='16' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='25' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='25' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='26' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='26' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='27' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='27' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='31' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='31' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='35' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='35' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='38' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='38' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='39' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='39' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='40' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='40' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='41' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='41' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='42' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='42' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='43' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='43' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='45' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='45' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='46' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='46' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='48' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='48' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='49' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='49' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

		<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='50' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='50' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='51' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='51' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='52' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='52' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='64' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='54' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='55' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='55' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='59' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='59' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='57' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='57' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='58' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='58' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='61' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='61' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

		
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='62' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='62' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
		
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='63' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='63' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

		
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='64' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='64' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='65' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='65' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='66' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='66' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>

	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='67' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='67' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='68' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='68' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	
	<br>
<?php
$tanggal = $_POST['tgl_awal_cks'];
$tanggal1 = $_POST['tgl_akhir_cks1'];
// $coba = $_POST['master'];
$nama = $_POST['id14'];
$i=1; 
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='69' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC"); ?>
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

<br>
<?php
$dua = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.id_master='69' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");

while($row1 = mysqli_fetch_array($dua)) : ?>

<TR>
	<td colspan="6" align="center">Total Berat </td>
	<td align="center"><?= $row1['jml'] ?></td>
</TR>
<?php endwhile; ?>
	
	
	
	
	
	
	
	
	
	
	