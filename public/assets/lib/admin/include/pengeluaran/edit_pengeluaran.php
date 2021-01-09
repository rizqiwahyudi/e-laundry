<div class="container">
<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pengeluaran where id_pengeluaran = '$id'");
$data = mysqli_fetch_array($query);
 ?>

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Konsumen</h3> 
		</div>  <div class="panel-body"> 
			<form method="post" action="include/pengeluaran/action_pengeluaran_edit.php">
				<input type="hidden" name="id" value="<?php echo $data['id_pengeluaran']; ?>">
				<div class="form-group">
					<label>Tempat Tanggal Lahir</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="tanggal" name="tanggal" value="<?php echo $data['tanggal'] ?>" required="" value="<?= date('d F y'); ?>">
				</div>
				<div class="form-group">
					<label>Nama Pengeluaran</label>
					<input type="text" name="nama" value="<?php echo $data['nama_pengeluaran'] ?>" class="form-control" placeholder="Masukkan Alamat">
				</div>
				<div class="form-group">
					<label>Nominal Pengeluaran</label>
					<input type="text" name="nominal" value="<?php echo $data['nominal'] ?>" class="form-control" placeholder="Masukkan nominal">
				</div>
				<button name="edit" class="btn btn-primary waves-effect waves-light">Edit</button>
			</form>
		</div>
	</div>
</div>