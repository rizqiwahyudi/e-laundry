
<div class="container">
<?php 
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master where no_nota = '$id'");
$data = mysqli_fetch_array($query);
 ?>

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fa fa-user-plus"></i> Input Data Transaksi</h3> 
		<form method="post" action="include/transaksi/action_edit_admin.php">
			<div class="form-group">
					<label>NO.NOTA</label>
					<input type="text" name="nota" id="nota" class="form-control" value="<?php echo $data['no_nota']; ?>">
				</div>
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama_R']; ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Transaksi</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_transaksi" required="" selected="" value="<?php echo $data['tgl_transaksi']; ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Selesai</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_selesai" required="" selected="" value="<?php echo $data['tgl_selesai']; ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Ambil</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="ambil" selected="" value="<?php echo $data['tgl_ambil']; ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Lunas</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="lunas" selected="" value="<?php echo $data['tgl_lunas']; ?>">
				</div>
				<div class="form-group">
					<label>Jenis transaksi</label><br>
					   <?php 
						    $result = mysqli_query($conn, "SELECT * from master");    
						    $jsArray = "var prdName = new Array();\n"; ?>
						    <select name="master" class="form-control" onchange=" changeValue(this.value)">';    
						      <option >--Pilih --</option>
						      <?php
						       while ($row = mysqli_fetch_array($result)) {
						       ?>
						       <option <?php if ($row['id_master'] == $data['id_master']) {echo "selected";} ?> value="<?= $row['id_master']; ?>"><?= $row['jenis']; ?></option>
						       <?php    
						          $jsArray .= "prdName['" . $row['id_master'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";    
						      }
						      ?>
						    </select> 
				</div>
				<div class="form-group">
					<label>Harga/Kilo</label>
					<input type="text" name="harga" id="prd_harga" class="form-control" readonly="" value=" <?php echo $data['harga']; ?>" onkeyup="sum();">
				</div>
				<div class="form-group">
					<label>Berat Kg</label>
					<input type="text" name="berat" id="prd_jumlah" class="form-control" value="<?php echo $data['berat']; ?>" placeholder="Masukkan Berat Kg" onkeyup="sum();" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Jumlah</label>
					<input type="text" class="form-control" name="jumlah_bayar1" id="prd_total1" value="<?php echo $data['jumlah_bayar1']; ?>" placeholder="total">
				</div>
				<div class="form-group">
					<label>Total</label>
					<input type="text" class="form-control" name="jumlah_bayar" id="prd_total" value="<?php echo $data['jumlah_bayar']; ?>" placeholder="total">
				</div>
				<div class="form-group">
					<label>Jumlah Helai</label>
					<input type="text" class="form-control" name="jumlah_helai" id="prd_total" value="<?php echo $data['jumlah_helai'] ?>" placeholder="isi jumlah helai">
				</div>
				<div class="form-group">
					<label>Diskon</label>
					<select name="diskon" id="prd_diskon" class="form-control" required onchange="hitung_diskon()">
						
						<option value="<?php echo $data['diskon'] ?>">Pilih :</option>
						<?php for ($i = 0; $i <= 100; $i+=5): ?>
							<option value="<?= $i; ?>"><?= $i; ?></option>
						<?php endfor ?>
					</select>
					<!-- <input type="text" class="form-control" name="diskon" id="prd_diskon" placeholder="diskon" onkeyup="hitung_diskon()"> -->
				</div>
				<!-- <div class="form-group">
					<label>DP</label>
					<input type="text" name="dp" class="form-control" value="<?php echo $data['dp'] ?>" id="prd_dp" placeholder="Isi DP jika ada" onkeyup="hitung_dp()" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Sisa Kembalian</label>
					<input type="text" name="sisa_kembali" id="prd_sisa" class="form-control" value="<?php echo $data['sisa_kembali'] ?>" placeholder="">
				</div> -->
				<div class="form-group">
					<label>Status Pembayaran</label><br>
					<select class="form-control" name="status_pembayaran">
						<?php if ($data['status_pembayaran'] == "Lunas"): ?>
							<option value="Belum Lunas">Belum Lunas</option>
							<option selected="" value="Lunas">Lunas</option>
						<?php else: ?>
							<option value="Lunas">Lunas</option>
							<option value="Belum Lunas" selected="">Belum Lunas</option>
						<?php endif ?>
			        </select>
				</div>
				<div class="form-group">
					<label>Status Pengerjaan</label>
					<select class="form-control" name="status_pengambilan">
					<?php if ($data['status_pengambilan'] == "Sudah di ambil"):?>
					 <option value="Belum di ambil">Belum di ambil</option>
					 <option selected="" value="Sudah di ambil">Sudah Selesai</option>
					<?php else: ?>
						<option value="Sudah di ambil">Sudah di ambil</option>
						<option value="Belum di ambil" selected="">Belum di ambil</option>
					<?php endif ?>
					</select>
				</div>
				<div class="form-group">
					<label>Status Karyawan</label><br>
					<select class="form-control" name="id_karyawan">
						<?php $qu = mysqli_query($conn, "SELECT * from karyawan"); ?>
						<?php
						while ($da = mysqli_fetch_array($qu)): ?>
								<option <?php if($data['id_karyawan'] == $da['id_karyawan']) echo "selected"; ?> value="<?= $da['id_karyawan']; ?>"> <?= $da['nama_karyawan']; ?></option>
						<?php endwhile ?>
			        </select>
				</div>
				<div class="form-group">
					<label>Tanggal Kerja</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tgl_kerja" selected="" value="<?php echo $data['tgl_kerja'] ?>" >
				</div>
				<div class="form-group">
					<label>Catatan</label>
					<input type="text" name="catatan" class="form-control" placeholder="isi jika di perlukan" value="<?php echo $data['catatan']; ?>">
				</div>
				</div>
				<button name="edit" class="btn btn-primary waves-effect waves-light">Edit</button>
			</form>
		</div>

	</div>

</div>
<script type="text/javascript"> 
	<?php echo $jsArray; ?>    
	function changeValue(id){  
	  document.getElementById('prd_harga').value = prdName[id].harga;
	} 
</script> 


<script>
	function sum() {
	      var txtFirstNumberValue = document.getElementById('prd_jumlah').value;
	      var txtSecondNumberValue = document.getElementById('prd_harga').value;
	      var result = parseFloat(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
	      if (!isNaN(result)) {
	         document.getElementById('prd_total').value = result;
	         document.getElementById('prd_total1').value = result;

	      } else {
	        document.getElementById('prd_total').value = 0;
	        document.getElementById('prd_total1').value = 0;
	      }
	}

	function hitung_dp() {
	      var total = document.getElementById('prd_total').value;
	      var dp = document.getElementById('prd_dp').value;
	      hasil = parseFloat(total) - parseFloat(dp);
	      if (!isNaN(hasil)) {
	         document.getElementById('prd_sisa').value = hasil; 
	      } else {
	        document.getElementById('prd_sisa').value = 0; 
	      }    
	}

	function hitung_diskon() {
		sum();
		var total = document.getElementById('prd_total').value;
		var diskon = document.getElementById('prd_diskon').value;
		hasil = parseFloat(total) - (parseFloat(total) * parseFloat(diskon)) / 100;
		if (!isNaN(hasil)) {
	         document.getElementById('prd_total').value = hasil;
	      } else {
	        document.getElementById('prd_total').value = 0;
	      }
		hitung_dp(); 
	}
</script>
