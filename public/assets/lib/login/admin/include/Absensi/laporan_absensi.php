<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

$tanggal = date('d-m-Y', strtotime($_POST['tgl_awal1']));
$tanggal1 = date('d-m-Y', strtotime($_POST['tgl_akhir1']));
$nama = $_POST['id12'];
$q = mysqli_query($conn, "SELECT * FROM absensi left join karyawan on karyawan.id_karyawan=absensi.id_karyawan WHERE absensi.id_karyawan = '$nama' and absensi.tgl_absensi between '$tanggal' and '$tanggal1'");


$pdf = new FPDF("L","cm",array(21.6,33));

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',28);
$pdf->SetX(1);
$pdf->SetTextColor(0); 
$pdf->Image('../../images/logoo.png',1,1,3);           
$pdf->Text(4, 2.5, 'L O U N D R Y   S E H A T I');
$pdf->SetFont('Times','B',14);
$pdf->Text(4, 3.2, 'JL.Kartini No. 33A Pangarangan - Sumenep');
$pdf->Text(4, 3.8, 'Telp.082330263968');
$pdf->Cell(30.6,3.4,'','B','L');

$pdf->SetFont('Times','B',22);
$pdf->Text(10, 5.8, 'L A P O R A N   H A R I A N  A B S E N S I');

$pdf->SetMargins(5,3,1,1);
$pdf->SetFont('Arial','B',14);
$pdf->ln(7);
$pdf->Cell(2, -1, 'No', 1, 0, 'C');
$pdf->Cell(7, -1, 'Nama karyawan', 1, 0, 'C');
$pdf->Cell(8, -1, 'tanggal absensi', 1, 0, 'C');
$pdf->Cell(8, -1, 'Waktu Absensi', 1, 0, 'C');


$no=1;
while ($d = mysqli_fetch_array($q)) {
	$pdf->SetFont('Arial','B',14);
	$pdf->ln(1);
	$pdf->Cell(2, -1, $no, 1, 0, 'C');
	$pdf->Cell(7, -1, $d['nama_karyawan'], 1, 0, 'C');
	$pdf->Cell(8, -1, $d['tgl_absensi'], 1, 0, 'C');
	$pdf->Cell(8, -1, $d['waktu_absensi'], 1, 0, 'C');
	$no++;
}

// $qA = mysqli_query($conn, "SELECT *, sum(berat) br FROM transaksi inner join master on transaksi.id_master = master.id_master inner join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.tgl_transaksi='$tanggal' order by jenis ASC");
// $ambil = mysqli_fetch_array($qA);
// $pdf->ln(1);
// $pdf->Cell(17, -1, 'Total Berat', 1, 0, 'C');
// $pdf->Cell(2.5, -1, number_format($ambil['br']) .' Kg', 1, 0, 'C');





$pdf->Output("nota.pdf","I");

?>