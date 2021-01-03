
<div class="container">

	<div class="panel panel-border panel-primary">
		<div class="panel-heading"> 
			<h3 class="panel-title"><i class="fas fa-shopping-cart"></i> Transaksi</h3> 
		</div>  <div class="panel-body"> 
			<form method="post" class="ac-form" action="include/transaksi/acition_tambah.php">
				<!-- <div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" id="nama" class="form-control search-input">
				</div> -->
				<div class="form-group">
                    <label>Nama</label>
                    <select id="kota" name="nama" style="width: 100%">
                        <option value=""></option>
                        <?php
                        // ambil data dari database
                        $query = "SELECT * FROM konsumen";
                        $hasil = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                            <option value="<?php echo $row['nama'] ?>"><?php echo $row['nama'] ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
				<div class="form-group">
					<label>Tanggal Transaksi</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_transaksi" required="" value="<?= date('Y-m-d'); ?>">
				</div>
				<div class="form-group">
					<label>Tanggal Selesai</label>
					<input  type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Tanggal" name="tanggal_selesai" required="" value="<?= date('Y-m-d'); ?>">
				</div>
				<div class="form-group">
					<label>Jenis transaksi</label><br>
					   <?php 
						    $result = mysqli_query($conn, "SELECT * from master");    
						    $jsArray = "var prdName = new Array();\n"; ?>
						    <select name="master" class="form-control" onchange="changeValue(this.value)">';    
						      <option>--Pilih --</option>
						      <?php
						       while ($row = mysqli_fetch_array($result)) {    
						          echo '<option value="' . $row['id_master'] . '">' . $row['jenis'] . '</option>';    
						          $jsArray .= "prdName['" . $row['id_master'] . "'] = {harga:'" . addslashes($row['harga']) . "'};\n";    
						      }
						      ?>
						    </select> 
				</div>
				<div class="form-group">
					<label>Harga/Kilo</label>
					<input type="text" name="harga" id="prd_harga" class="form-control" readonly="" onkeyup="sum();">
				</div>
				<div class="form-group">
					<label>Berat Kg</label>
					<input type="text" name="berat" id="prd_jumlah" class="form-control" placeholder="Masukkan Berat Kg" onkeyup="sum();" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Jumlah Bayar</label>
					<input type="text" class="form-control" name="jumlah_bayar1" id="prd_total1" readonly="" placeholder="total">
				</div>
				<div class="form-group">
					<label>Total</label>
					<input type="text" class="form-control" name="jumlah_bayar" id="prd_total" readonly="" placeholder="total">
				</div>
				<div class="form-group">
					<label>Jumlah Helai</label>
					<input type="text" class="form-control"  value="0" name="jumlah_helai" id="prd_total" placeholder="isi jumlah helai">
				</div>
				<div class="form-group">
					<label>Diskon</label>
					<select name="diskon" id="prd_diskon" class="form-control" required onchange="hitung_diskon()">
						<option value="">Pilih :</option>
						<?php for ($i = 0; $i <= 100; $i+=5): ?>
							<option value="<?= $i; ?>"><?= $i; ?></option>
						<?php endfor ?>
					</select>
					<!-- <input type="text" class="form-control" name="diskon" id="prd_diskon" placeholder="diskon" onkeyup="hitung_diskon()"> -->
				</div>
				<!-- <div class="form-group">
					<label>DP</label>
					<input type="text" name="dp" value="0" class="form-control" id="prd_dp" placeholder="Isi DP jika ada" onkeyup="hitung_dp()" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Sisa Kembalian</label>
					<input type="text" name="sisa_kembali" id="prd_sisa" class="form-control" value="0" placeholder="">
				</div> -->
				<div class="form-group">
					<label>Status Pembayaran</label><br>
					<select class="form-control" name="status_pembayaran" readonly="">
			        <option value="Belum Lunas">Belum Lunas</option>
			        <option value="Lunas">Lunas</option>
			        </select>
				</div>
				<div class="form-group">
					<label>Status Pengerjaan</label>
					<input type="text" name="status_pengambilan" class="form-control" value="Belum di ambil" readonly="">
				</div>
				<div class="form-group">
					<label>Catatan</label>
					<input type="text" name="catatan" class="form-control" placeholder="isi jika di perlukan">
				</div>
				</div>
				<button name="simpan" class="btn btn-primary search-submit waves-effect waves-light">Simpan</button>
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


