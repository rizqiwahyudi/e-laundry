<!-- <div class="row">
  <div class="col-md-3">
    <div class="card" style="box-shadow: 1px 1px 1px rgba(0,0,0,0.3); height: 100px; background: #fff; border-radius: 5px; padding: 5px;">
      <div class="card-body">
        <div class="row" style="padding: 10px;">
          <div class="col-md-6">
            <i class="fa fa-user" style="font-size: 50px;"></i>
          </div>
          <div class="col-md-6 text-right">
            <p>User</p>
            <h2>6USR</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<?php include 'koneksi.php'; ?>

<?php 
$sql = mysqli_query($conn, "SELECT id_transaksi FROM transaksi");
$count = mysqli_num_rows($sql);
$hari = date('Y-m-d');

$perhari = mysqli_query($conn, "SELECT id_transaksi FROM transaksi where tgl_transaksi = '$hari'");
$countHari = mysqli_num_rows($perhari);

?>

<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-border panel-primary">
        <div class="panel-heading"> 
          <h3 class="panel-title"><i class="fa fa-home"></i> Transaksi Hari Ini</h3> 
        </div> 
        <div class="panel-body"> 
          <h2><?= $countHari ?></h2>
        </div> 
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-border panel-primary">
        <div class="panel-heading"> 
          <h3 class="panel-title"><i class="fa fa-home"></i> Seluruh Transaksi</h3> 
        </div> 
        <div class="panel-body"> 
          <h2><?= $count ?> <span style="font-size: 22px; font-family: Times">Transaksi</span></h2> 
        </div> 
      </div>
    </div>
  </div>
</div>








