<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class=""></i> Laporan Penerimaan </h3> 
		</div>  <div class="panel-body"> 
	<form action="include/transaksi/laporan_harian.php" method="post">
	<input type="date" name="tgl_awal" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir" value="<?= date('Y-m-d'); ?>" required class="form-control">
	
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
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
</div>


		</div>

	</div>

</div>




