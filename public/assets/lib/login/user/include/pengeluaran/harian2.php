<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

$c = $_POST['tgl'];
$qa = mysqli_query($conn, "SELECT * FROM pengeluaran where tanggal = '$c'");


$pdf = new FPDF("L","cm",array(21.6,33));

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',22);
$pdf->SetX(1);
$pdf->SetTextColor(0); 
$pdf->Image('../../images/logoo.png',1,1,3);           
$pdf->Text(4, 2.5, 'L O U N D R Y   S E H A T I');
$pdf->SetFont('Times','B',14);
$pdf->Text(4, 3.2, 'JL.Kartini No. 33A Pangarangan - Sumenep');
$pdf->Text(4, 3.8, 'Telp.085236543891');
$pdf->Cell(30.6,3.4,'','B','L');

$pdf->SetFont('Times','B',20);
$pdf->Text(10, 5.8, 'LAPORAN BULANAN HARIAN');

$pdf->SetMargins(6.2,3,1,1);
$pdf->SetFont('Arial','B',14);
$pdf->ln(7);
$pdf->Cell(2, -1, 'No', 1, 0, 'C');
$pdf->Cell(7, -1, 'Tanggal Pengeluaran', 1, 0, 'C');
$pdf->Cell(6, -1, 'Nama Pengeluaran', 1, 0, 'C');
$pdf->Cell(6, -1, 'Nominal', 1, 0, 'C');

$no=1;
while ($d = mysqli_fetch_array($qa)) {

	$pdf->SetFont('Arial','B',14);
	$pdf->ln(1);
	$pdf->Cell(2, -1, $no, 1, 0, 'C');
	$pdf->Cell(7, -1,date('d-m-Y', strtotime($d['tanggal'])), 1, 0, 'C');
	$pdf->Cell(6, -1, $d['nama_pengeluaran'], 1, 0, 'C');
	$pdf->Cell(6, -1, 'Rp,' .number_format($d['nominal']), 1, 0, 'C');
		$no++;
}

$que = mysqli_query($conn, "SELECT sum(nominal) as jml from pengeluaran where tanggal = '$c'");
$dat = mysqli_fetch_array($que);
$pdf->ln(1);
$pdf->Cell(15, -1, 'Total Pengeluaran', 1, 0, 'C');
$pdf->Cell(6, -1, 'Rp.'.number_format($dat['jml']), 1, 0, 'C');

// $tb = substr($a, 0, 7);
// $que = mysqli_query($conn, "SELECT sum(nominal) as t_p from pengeluaran where tanggal like '%$tb%'");
// $dat = mysqli_fetch_array($que);
// $pdf->ln(1);
// $pdf->Cell(29.7, -1, 'Total Pengeluaran ', 1, 0, 'C');
// $pdf->Cell(3, -1, 'Rp.'.number_format($dat['t_p']), 1, 0, 'C');

// $pb = $da['jml'] - $dat['t_p'];

// $pdf->ln(1);
// $pdf->Cell(29.7, -1, 'Pendapatan Bersih', 1, 0, 'C');
// $pdf->Cell(3, -1, 'Rp.'.number_format($pb), 1, 0, 'C');





$pdf->Output("nota.pdf","I");

?>