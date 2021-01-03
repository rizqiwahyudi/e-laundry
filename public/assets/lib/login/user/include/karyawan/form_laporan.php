<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class=""></i> Laporan karyawan (<?php echo $id=$_GET['id']; ?>) </h3> 
		</div>  <div class="panel-body"> 
	<form action="include/karyawan/laporan_bulanan.php" method="post">
	<input type="date" name="tgl_awal" value="<?= date('Y-m-d'); ?>" required class="form-control">
	<input type="date" name="tgl_akhir" value="<?= date('Y-m-d'); ?>" required class="form-control">
		<input type="hidden" name="id12" value="<?php echo $id ?>">
	<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"></span> Print</button>
	<br>
	<br>
</form>



		</div>

	</div>

</div>




