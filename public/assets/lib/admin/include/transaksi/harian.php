<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

$a = $_POST['abc'];
$b = $_POST['abcd'];
$q = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.tgl_transaksi between '$a' and '$b' order by nama_karyawan ASC");
$da = mysqli_fetch_array($q);

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
$pdf->Text(13, 5.8, 'LAPORAN TRANSAKSI');

$pdf->SetMargins(2.2,3,1,1);
$pdf->SetFont('Arial','B',11);
$pdf->ln(7);
$pdf->Cell(1, -1, 'No', 1, 0, 'C');
$pdf->Cell(4, -1, 'Nama Pelanggan', 1, 0, 'C');
$pdf->Cell(2.8, -1, 'Nomer Nota', 1, 0, 'C');
$pdf->Cell(3, -1, 'Tgl Transaksi', 1, 0, 'C');
$pdf->Cell(5, -1, 'Jenis Cucian', 1, 0, 'C');
$pdf->Cell(3, -1, 'Berat', 1, 0, 'C');
$pdf->Cell(3, -1, 'Pengambilan', 1, 0, 'C');
$pdf->Cell(3, -1, 'Pembayaran', 1, 0, 'C');
$pdf->Cell(3, -1, 'Jumlah Bayar', 1, 0, 'C');


$no=1;
$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.tgl_transaksi between '$a' and '$b' order by no_nota ASC");
while ($d = mysqli_fetch_array($qu)) {
	$pdf->SetFont('Arial','B',10);
	$pdf->ln(1);
	$pdf->Cell(1, -1, $no, 1, 0, 'C');
	$pdf->Cell(4, -1, $d['nama_R'], 1, 0, 'C');
	$pdf->Cell(2.8, -1, $d['no_nota'], 1, 0, 'C');
	$pdf->Cell(3, -1, $d['tgl_transaksi'], 1, 0, 'C');
	$pdf->Cell(5, -1, $d['jenis'], 1, 0, 'C');
	$pdf->Cell(3, -1, $d['berat']. ' Kg', 1, 0, 'C');
	$pdf->Cell(3, -1, $d['status_pengambilan'], 1, 0, 'C');
	$pdf->Cell(3, -1, $d['status_pembayaran'], 1, 0, 'C');
	$pdf->Cell(3, -1, 'Rp.'.number_format($d['jumlah_bayar']), 1, 0, 'C');
	$no++;
}

$pdf->ln(1);
$pdf->Cell(15.8, -1, 'Total Berat', 1, 0, 'C');
$pdf->Cell(9, -1, $da['br'] .' Kg', 1, 0, 'C');




$pdf->Output("nota.pdf","I");

?>