<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

if (isset($_GET['nama'])) 
	$a = $_GET['nama'];
	$b = $_GET['tgl'];
	$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");
	$da = mysqli_fetch_array($q);


$pdf = new FPDF("P","mm",array(250,67));

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',15);
$pdf->SetX(1);
$pdf->SetTextColor(0); 
$pdf->Image('../../images/logoo.png',0,1,13);           
$pdf->Text(13, 5.6, 'LOUNDRY SEHATI');
$pdf->SetFont('Times','',11);
$pdf->Text(18, 10, 'JL.Kartini No. 33A'); 
$pdf->Text(22, 14, 'Pangarangan - Sumenep');
$pdf->Text(9, 18, 'Telp.085236543891-085259494827');



$pdf->SetFont('Arial','', 12);
$pdf->SetMargins(0,2,3,1,1);
	$pdf->ln(27);
	$pdf->Cell(19, -1, 'Nama ', 0, 0, 'L');
	$pdf->Cell(9, -1, '      : ' .$da['nama_R'], 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(19, -1, 'Alamat', 0, 0, 'L');
	$pdf->Cell(9, -1, '					 : ' .$da['alamat_konsumen'], 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(19, -1, 'Nomer Tlp', 0, 0, 'L');
	$pdf->Cell(9, -1, '					 : ' .$da['nohp_konsumen'], 0, 0, 'L');
	$pdf->ln(5);		
	$pdf->Cell(19, -1, 'Tgl Transaksi', 0, 0, 'L');
	$pdf->Cell(9, -1, '					 : ' .date('d-m-Y', strtotime($da['tgl_transaksi'])), 0, 0, 'L');
	$pdf->ln(5);		
	$pdf->Cell(19, -1, 'Tgl Selesai', 0, 0, 'L');
	$pdf->Cell(9, -1, '					 : ' .date('d-m-Y', strtotime($da['tgl_selesai'])), 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Text(0, 54, '- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -');

$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");

$status="";
$status1 = "";
while ($d = mysqli_fetch_array($qu)) {
if ($d['status']=='kg') {
	$status = "Berat";
	$status1 = "Kg";
}
else {
	$status = "Jml Pcs";
	$status1 = "pcs";
}
$pdf->SetFont('Arial','',11.5);
$pdf->SetMargins(0.8,2,3,1,1);
	$pdf->ln(7);
	$pdf->Cell(17, -1, 'No.Nota', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : ' .$d['no_nota'], 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, 'Jenis', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : ' .$d['jenis'], 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, $status , 0, 0, 'L');
	$pdf->Cell(9, -1, ' : ' .$d['berat']. $status1, 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, 'Jml Helai', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : ' .$d['jumlah_helai']. 'pcs', 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, 'Jml bayar', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : Rp.' .number_format($d['jumlah_bayar1']), 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, 'Diskon', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : ' .$d['diskon']. '%', 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, 'Bayar', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : Rp.' .number_format($d['jumlah_bayar']), 0, 0, 'L');
	$pdf->ln(5);
	$pdf->Cell(17, -1, 'Status', 0, 0, 'L');
	$pdf->Cell(9, -1, ' : ' .$d['status_pembayaran'], 0, 0, 'L');
	$pdf->ln(5);


}



$nat = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");

$jan = mysqli_fetch_array($nat); 

$pdf->SetFont('Arial','',11);

$pdf->Cell(19, -1, '---------------------------------------------------------------', 0, 0, 'L');
$pdf->ln(5);
$pdf->Cell(19, -1, 'T O T A L', 0, 0, 'L');
$pdf->Cell(9, -1, ': Rp.' .number_format($jan['jml']). '', 0, 0, 'L');

// $qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");
// while ($d = mysqli_fetch_array($qu)) {
// 	$pdf->SetFont('Arial','B',2);
// 	$pdf->ln(1.5);
// 	$no=1;
// 	// $pdf->Cell(2, -1.5, $no, 1, 0, 'C');
// 	$pdf->Cell(6.7, -1.5, $d['jenis'], 1, 0, 'C');
// 	$pdf->Cell(3.6, -1.5, $d['berat'], 1, 0, 'C');
// 	$pdf->Cell(5, -1.5, 'Rp.'.$d['harga'], 1, 0, 'C');
// 	$pdf->Cell(7, -1.5, $d['status_pembayaran'], 1, 0, 'C');
// 	$pdf->Cell(3.6, -1.5, 'Rp.'.$d['dp'], 1, 0, 'C');
// 	$pdf->Cell(6.7, -1.5, 'Rp.'.number_format($d['jumlah_bayar']), 1, 0, 'C');
// 	$no++;
// }
// 	$pdf->ln(1.5);
// 	$pdf->Cell(27.9, -1.5, 'Total', 1, 0, 'C');
// 	$pdf->Cell(6.7, -1.5, 'Rp.'.$da['jml'], 1, 0, 'C');




// $pdf->Cell(190,1,'','B',0,'L');



$pdf->Output("nota.pdf","I");

?>