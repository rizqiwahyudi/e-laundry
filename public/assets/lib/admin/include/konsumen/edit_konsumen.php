<div class="container">
<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM konsumen where id_konsumen = '$id'");
$data = mysqli_fetch_array($query);
 ?>

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Konsumen</h3> 
		</div>  <div class="panel-body"> 
			<form method="post" action="include/konsumen/action_konsumen_edit.php">
				<input type="hidden" name="id" value="<?php echo $data['id_konsumen']; ?>">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" placeholder="Masukkan Nama">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" value="<?php echo $data['alamat_konsumen'] ?>" class="form-control" placeholder="Masukkan Alamat">
				</div>
				<div class="form-group">
					<label>Tempat Tanggal Lahir</label>
					<input  type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="ttl" name="ttl" value="<?php echo $data['ttl_konsumen'] ?>">
				</div>
				<div class="form-group">
					<label>nohp</label>
					<input type="text" name="nohp" value="<?php echo $data['nohp_konsumen'] ?>" class="form-control" placeholder="Masukkan nomer hp">
				</div>
				<button name="edit" class="btn btn-primary waves-effect waves-light">Edit</button>
			</form>
		</div>

	</div>

</div>