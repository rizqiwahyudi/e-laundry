<div class="container">

<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM master where id_master = '$id'");
$data = mysqli_fetch_array($query);
 ?>

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Master </h3> 
		</div>  <div class="panel-body"> 
			<form method="post" action="include/master/action_edit.php">
				<input type="hidden" name="id" value="<?php echo $data['id_master']; ?>">
				<div class="form-group">
					<label>Jenis Cucian</label>
					<input type="text" name="jenis" value="<?php echo $data['jenis'] ?>" class="form-control" placeholder="Masukkan Jenis Cucian">
				</div>
				<div class="form-group">
					<label>Harga</label>
					<input type="text" name="harga" value="<?php echo $data['harga']; ?>" class="form-control" placeholder="Masukkan Harga">
				</div>
				<button name="edit" class="btn btn-primary waves-effect waves-light">Edit</button>
			</form>
		</div>

	</div>

</div>