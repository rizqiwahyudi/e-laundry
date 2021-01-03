<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

$tanggal = $_POST['tgl_awal'];
$tanggal1 = $_POST['tgl_akhir'];
$nama = $_POST['id12'];
$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");


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
$pdf->Text(13, 5.8, 'L A P O R AN H A R I AN');

$pdf->SetMargins(2,3,1,1);
$pdf->SetFont('Arial','B',12);
$pdf->ln(7);
$pdf->Cell(1, -1, 'No', 1, 0, 'C');
$pdf->Cell(4, -1, 'Nama karyawan', 1, 0, 'C');
$pdf->Cell(4, -1, 'No Nota', 1, 0, 'C');
$pdf->Cell(4, -1, 'Nama', 1, 0, 'C');
$pdf->Cell(4, -1, 'Tgl Pengerjaan', 1, 0, 'C');
$pdf->Cell(4, -1, 'Tgl Transaksi', 1, 0, 'C');
$pdf->Cell(6, -1, 'Jenis transaksi', 1, 0, 'C');
$pdf->Cell(2.5, -1, 'berat', 1, 0, 'C');

$no=1;
while ($d = mysqli_fetch_array($q)) {
	$pdf->SetFont('Arial','B',12);
	$pdf->ln(1);
	$pdf->Cell(1, -1, $no, 1, 0, 'C');
	$pdf->Cell(4, -1, $d['nama_karyawan'], 1, 0, 'C');
	$pdf->Cell(4, -1, $d['no_nota'], 1, 0, 'C');
	$pdf->Cell(4, -1, $d['nama_R'], 1, 0, 'C');
	$pdf->Cell(4, -1, date('d-m-Y', strtotime($d['tgl_kerja'])), 1, 0, 'C');
	$pdf->Cell(4, -1, date('d-m-Y', strtotime($d['tgl_transaksi'])), 1, 0, 'C');
	$pdf->Cell(6, -1, $d['jenis'], 1, 0, 'C');
	$pdf->Cell(2.5, -1, $d['berat']. ' Kg', 1, 0, 'C');
	$no++;
}
$qa = mysqli_query($conn, "SELECT *, sum(berat) as jml FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.id_karyawan='$nama' and transaksi.tgl_kerja between '$tanggal' and '$tanggal1' order by transaksi.tgl_kerja ASC");


$ambil1 = mysqli_fetch_array($qa);
$pdf->ln(1);
$pdf->Cell(27, -1, 'Total Berat', 1, 0, 'C');
$pdf->Cell(2.5, -1, number_format($ambil1['jml']) .' Kg', 1, 0, 'C');





$pdf->Output("nota.pdf","I");

?>