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

$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='1' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='1' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='1' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='2' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='2' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='2' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='3' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='3' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='3' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>

	
	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='4' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='4' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='4' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>

<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='5' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='5' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='5' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='6' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='6' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='6' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='7' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='7' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='7' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>


	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='8' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='8' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='8' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>





<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='9' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='9' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='9' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	


<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='10' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='10' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='10' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='12' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='12' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='12' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>





<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='16' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='16' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='16' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='25' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='25' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='25' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>





<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='26' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='26' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='26' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='27' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='27' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='27' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='31' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='31' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='31' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='35' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='35' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='35' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='38' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='38' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='38' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='39' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='39' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='39' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>





<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='41' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='41' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='41' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='42' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='42' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='42' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>





<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='43' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='43' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='43' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='45' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='45' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='45' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='46' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='46' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='46' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='48' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='48' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='48' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='49' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='49' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='49' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='50' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='50' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='50' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='51' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='51' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='51' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='52' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='52' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='52' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='54' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='54' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='54' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>




<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='55' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='55' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='55' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='59' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='59' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='59' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>



<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='57' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='57' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='57' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	


<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='58' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='58' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='58' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	


<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='59' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='59' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='59' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	


<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='61' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='61' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='61' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='62' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='62' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='62' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='62' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='62' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='62' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='63' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='63' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='63' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	

<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='64' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='64' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='64' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='65' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='65' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='65' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	
<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='66' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='66' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='66' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>

	<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='67' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='67' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='67' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	

<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='68' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='68' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='68' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	
	<?php
$a = $_POST['excel1'];
$b = $_POST['excel2'];
$i=1; 
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='69' and transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC"); ?>
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
				<td align="center"><?= $row['jumlah_bayar']?></td>

</tr>
<?php endwhile; ?>
<?php
$w = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='69' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
while($row1 = mysqli_fetch_array($w)) : ?>

<TR>
	<td colspan="5" align="center">Jumlah berat</td>
	<td align="center"><?="". $row1['br'] ?></td>
</TR>
	<?php endwhile; ?>
<?php
	$mu = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.id_master='69' and transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC"); 
	while($musang = mysqli_fetch_array($mu)) : ?>
	<TR>
	<td colspan="8" align="center">Jumlah Total Bayar </td>
	<td align="center"><?="".number_format ($musang['jml']) ?></td>
</TR>
<?php endwhile; ?>
	






















































