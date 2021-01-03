<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Konsumen</h3> 
		</div>  <div class="panel-body"> 
			<form method="post" action="include/konsumen/acition_tambah_konsumen.php">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control"  class="form-control search-input" placeholder="Masukkan Nama">
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
				</div>
				<div class="form-group">
					<label>Tempat Tanggal Lahir</label>
					<input  type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="ttl" required="">
				</div>
				<div class="form-group">
					<label>nohp</label>
					<input type="text" name="nohp" class="form-control" placeholder="Masukkan nomer hp">
				</div>
				<button name="simpan" class="btn btn-primary waves-effect waves-light">Simpan</button>
			</form>
		</div>

	</div>

</div>