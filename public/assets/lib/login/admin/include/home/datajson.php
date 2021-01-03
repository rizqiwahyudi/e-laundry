<?php 
include '../../koneksi.php';

$sql = mysqli_query($conn, "SELECT count(no_nota) as countNota from transaksi");
$result = array();

while ($row = mysqli_fetch_array($sql)) {
	array_push($result, array('count' => $row['countNota']));
}
echo json_encode(array('result' => $result));