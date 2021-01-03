
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
					<input type="hidden" name="nota" id="nota" class="form-control" value="<?php echo $data['no_nota']; ?>">
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
	      } else {
	        document.getElementById('prd_total').value = 0;
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
