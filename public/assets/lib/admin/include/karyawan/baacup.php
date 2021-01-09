<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

$tanggal = $_POST['tgl_awal'];
$tanggal1 = $_POST['tgl_akhir'];
$nama = $_POST['id_1'];
$q = mysqli_query($conn, "SELECT sum(transaksi.berat) as tb from transaksi left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan where karyawan.id_karyawan='$nama' and transaksi.tgl_transaksi between '$tanggal' and '$tanggal1'");
$d = mysqli_fetch_array($q);
$qu = mysqli_query($conn, "SELECT * FROM karyawan where id_karyawan='$nama'");
$da = mysqli_fetch_array($qu);
$total_gaji = 0;
$sisa = 0;
$uang_lembur = 0;
$gaji = $da['gaji_karyawan'] * $da['hari'];
if ($d['tb'] > 30) {
	$sisa = $d['tb'] - 30;
	if ($sisa == null) {
		$sisa = 0;
	}else {
		$sisa;
	}
	$uang_lembur = $da['uang_lembur'] * $sisa;
	$total_gaji = ($gaji + $uang_lembur) - $da['utang'];
}else {
	$total_gaji = $gaji - $da['utang'];
}

$pdf = new FPDF("L","cm",array(14.8,21,0));

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',22);
$pdf->SetX(1);
$pdf->SetTextColor(0); 
$pdf->Image('../../images/logoo.png',1,0.3,3);           
$pdf->Text(4, 1.5, 'L O U N D R Y   S E H A T I');
$pdf->SetFont('Times','B',14);
$pdf->Text(4, 2.2, 'JL.Kartini No. 33A Pangarangan - Sumenep');
$pdf->Text(4, 2.8, 'Telp.082330263968');
$pdf->Text(0, 3.8, '----------------------------------------------------------------------------------------------------------------------------------------------');

$pdf->SetFont('Times','B',20);
$pdf->Text(6.8, 4.8, 'G A J I  K A R Y A W A N');


$pdf->SetMargins(1,3,1,1);
$pdf->SetFont('Arial','B',12);
$pdf->ln(6);
$pdf->Cell(1, -1, '-', 0, 0, 'L');
$pdf->Cell(8, -1, 'Nama Karyawan', 0, 0, 'L');
$pdf->Cell(4, -1, ': ' .$da['nama_karyawan'], 0, 0, 'L');
$pdf->ln(1);
$pdf->Cell(1, -1, '-', 0, 0, 'L');
$pdf->Cell(8, -1, 'Gaji Pokok', 0, 0, 'L');
$pdf->Cell(4, -1, ': ' .$da['hari']. ' Hari X Rp. ' . number_format($da['gaji_karyawan']) . ' = Rp.' .number_format($gaji) , 0, 0, 'L');
$pdf->ln(1);
$pdf->Cell(1, -1, '-', 0, 0, 'L');
$pdf->Cell(8, -1, 'Bonus', 0, 0, 'L');
$pdf->Cell(4, -1, ': '  .$sisa .' Kg  X  Rp. ' .number_format($da['uang_lembur']). ' = Rp.' . number_format($uang_lembur), 0, 0, 'L');
$pdf->ln(1);
$pdf->Cell(1, -1, '-', 0, 0, 'L');
$pdf->Cell(8, -1, 'BON', 0, 0, 'L');
$pdf->Cell(4, -1, ': Rp. ' .number_format($da['utang']), 0, 0, 'L');
$pdf->ln(1);
$pdf->Cell(9, -1, 'T O T A L', 0, 0, 'C');
$pdf->Cell(8, -1, '  Rp.'. number_format($total_gaji) , 0, 0, 'L');


// $pdf->Cell(4, -1, 'Alamat', 1, 0, 'C');
// $pdf->Cell(4, -1, 'No Tlp', 1, 0, 'C');;
// $pdf->Cell(4, -1, 'Jenis transaksi', 1, 0, 'C');
// $pdf->Cell(2.5, -1, 'berat', 1, 0, 'C');
// $pdf->Cell(4, -1, 'Gaji', 1, 0, 'C');
// $pdf->Cell(4, -1, 'Uang lembur', 1, 0, 'C');
// $pdf->Cell(4, -1, 'CasBack', 1, 0, 'C');

// $no=1;
// while ($d = mysqli_fetch_array($q)) {
// 	$pdf->SetFont('Arial','B',12);
// 	$pdf->ln(1);
// 	$pdf->Cell(1, -1, $no, 1, 0, 'C');
// 	$pdf->Cell(4, -1, $d['nama_karyawan'], 1, 0, 'C');
// 	$pdf->Cell(4, -1, $d['alamat_karyawan'], 1, 0, 'C');
// 	$pdf->Cell(4, -1, $d['no_tlp_karyawan'], 1, 0, 'C');
// 	$pdf->Cell(4, -1, $d['jenis'], 1, 0, 'C');
// 	$pdf->Cell(2.5, -1, $d['berat']. ' Kg', 1, 0, 'C');

// }
// $qa = mysqli_query($conn, "SELECT *, sum(berat) as br FROM transaksi left join master on transaksi.id_master = master.id_master left join karyawan on transaksi.id_karyawan = karyawan.id_karyawan WHERE karyawan.nama_karyawan='$nama' and transaksi.tgl_transaksi between '$tanggal' and '$tanggal1' order by jenis ASC");

// $ambil1 = mysqli_fetch_array($qa);
// $pdf->ln(1);
// $pdf->Cell(14, -1, 'Total Berat', 1, 0, 'C');
// $pdf->Cell(2.5, -1, number_format($ambil1['br']) .' Kg', 1, 0, 'C');





$pdf->Output("nota.pdf","I");

?>