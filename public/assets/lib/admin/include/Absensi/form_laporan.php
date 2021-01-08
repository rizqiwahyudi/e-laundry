<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class=""></i> Laporan karyawan (<?php echo $idv=$_GET['ida']; ?>) </h3> 
		</div>  <div class="panel-body"> 
	<form action="include/absensi/laporan_absensi.php" method="post">
	<input type="date" name="tgl_awal1" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir1" value="<?= date('Y-m-d'); ?>" required class="form-control">
		<input type="hidden" name="id12" value="<?php echo $idv ?>">
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
	<br>
	<br>
</form>

<<!-- h3 class="panel-title"><i class=""></i> Laporan Harian</h3> 
<form action="include/absensi/laporan_absensi.php" method="post">
	<input type="date" name="satia" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="hidden" name="id" value="<?php echo $idv ?>">
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
</form> -->


		</div>

	</div>

</div>




