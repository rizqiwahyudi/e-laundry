<div class="container">

<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM karyawan where id_karyawan = '$id'");
$data = mysqli_fetch_array($query);
 ?>

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Karyawan</h3> 
		</div>  <div class="panel-body"> 
			<form method="post" action="include/karyawan/action_edit.php">
				<input type="hidden" name="id" value="<?php echo $data['id_karyawan']; ?>">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" value="<?php echo $data['nama_karyawan'] ?>" class="form-control" placeholder="Masukkan Nama">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" value="<?php echo $data['alamat_karyawan'] ?>" class="form-control" placeholder="Masukkan Alamat">
				</div>
				<div class="form-group">
					<label>No Hp</label>
					<input type="text" name="nohp" value="<?php echo $data['no_tlp_karyawan'] ?>" class="form-control" placeholder="Masukkan No Hp">
				</div>
				<div class="form-group">
					<label>Masukkan Hari</label>
					<input type="text" name="hari" value="<?php echo $data['hari'] ?>" class="form-control" placeholder="Masukkan No Hp">
				</div>
				<div class="form-group">
					<label>gaji</label>
					<input type="text" name="gaji" value="<?php echo $data['gaji_karyawan'] ?>" class="form-control" placeholder="Masukkan Gaji">
				</div>
				<div class="form-group">
					<label>Uang Lembur</label>
					<input type="text" name="uang" value="<?php echo $data['uang_lembur'] ?>" class="form-control" value="2000">
				</div>
				<div class="form-group">
					<label>BON</label>
					<input type="text" name="utang" value="<?php echo $data['utang'] ?>" class="form-control" value="">
				</div>
				<div class="form-group">
					<label>Lebih berat</label>
					<input type="text" name="lebih_berat" value="<?php echo $data['lebih_berat'] ?>" class="form-control" value="">
				</div>
				<button name="edit" class="btn btn-primary waves-effect waves-light">Edit</button>
			</form>
		</div>

	</div>

</div>