<?php 
include '../../koneksi.php';

$harinini = date('Y-m-d');

$sql = mysqli_query($conn, "SELECT count(no_nota) as countNota from transaksi where tgl_transaksi = '$harinini'");
$result = array();

while ($row = mysqli_fetch_array($sql)) {
	array_push($result, array('count' => $row['countNota']));
}
echo json_encode(array('result' => $result));