<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class=""></i> Laporan Penerimaan </h3> 
		</div>  <div class="panel-body"> 
	<form action="include/transaksi/laporan_harian.php" method="post">
	<input type="date" name="tgl_awal" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir" value="<?= date('Y-m-d'); ?>" required class="form-control">
	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
		</form>
		<form action="include/transaksi/excel.php" method="post">
	<input type="date" type="date" name="tgl_awalexcel" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" type="date" name="tgl_akhirexcel2" value="<?= date('Y-m-d'); ?>" required class="form-control">	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Excel</button>
	<br>
	<br>
</form>
</div>
<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
<h3 class="panel-title"><i class=""></i> Laporan Transaksi </h3>

<form action="include/transaksi/harian.php" method="post">
	<input type="date" name="abc" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="abcd" value="<?= date('Y-m-d'); ?>" required class="form-control">

	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
</form>
			<form action="include/transaksi/laporantransaksi.php" method="post">
	<input type="date" type="date" name="excel1" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" type="date" name="excel2" value="<?= date('Y-m-d'); ?>" required class="form-control">	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Excel</button>
				<br>
				<br>
	</from>
	</div>
<br>
<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
	<h3 class="panel-title"><i class=""></i> Laporan Belum Di Ambil </h3> 
	</div>  <div class="panel-body"> 
	<form action="include/transaksi/laporan_belum.php" method="post">
	<input type="date" name="tgl_awal1" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir1" value="<?= date('Y-m-d'); ?>" required class="form-control">
	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
	<br>
	<br>
</form>
</div>
	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
<h3 class="panel-title"><i class=""></i> Laporan Pelanggan </h3>

<form action="include/transaksi/pelanggan.php" method="post">
	 <select id="kota" name="nama" style="width: 100%">
                        <option value=""></option>
                        <?php
                        // ambil data dari database
                        $query = "SELECT * FROM konsumen";
                        $hasil = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                            <option value="<?php echo $row['nama'] ?>"><?php echo $row['nama'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
	<input type="date" name="pelanggan" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="pelanggan1" value="<?= date('Y-m-d'); ?>" required class="form-control">

	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
	</form>
	</div>
		<br>
<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
	<h3 class="panel-title"><i class=""></i> Laporan yang sudah di Ambil </h3> 
	</div>  <div class="panel-body"> 
	<form action="include/transaksi/laporan_sudah.php" method="post">
	<input type="date" name="tgl_awal0" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir0" value="<?= date('Y-m-d'); ?>" required class="form-control">
	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
	<br>
	<br>
</form>
</div>
<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
<h3 class="panel-title"><i class=""></i> Laporan yang belum lunas </h3> 
	</div>  <div class="panel-body"> 
	<form action="include/transaksi/laporan_belumlunas.php" method="post">
	<input type="date" name="tgl_awal11" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir11" value="<?= date('Y-m-d'); ?>" required class="form-control">
	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
	<br>
	<br>
</form>

		</div>

	</div>

</div>




