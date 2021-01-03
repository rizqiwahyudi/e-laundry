<?php
include '../../koneksi.php';
require('../../assets/pdf/fpdf.php');

if (isset($_GET['nama'])) 
	$a = $_GET['nama'];
	$b = $_GET['tgl'];
	$q = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");
	$da = mysqli_fetch_array($q);


$pdf = new FPDF("P","mm",array(58,37));

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',7);
$pdf->SetX(1);
$pdf->SetTextColor(0); 
$pdf->Image('../../images/logoo.png',0,1,13);           
$pdf->Text(13, 5.6, 'LOUNDRY SEHATI');
$pdf->SetFont('Times','',5);
$pdf->Text(16, 8.4, 'JL.Kartini No. 33A'); 
$pdf->Text(14, 10.5, 'Pangarangan - Sumenep');
$pdf->Text(16, 12.8, 'Telp.082330263968');



$pdf->SetFont('Arial','B',3.5);
$pdf->Text(1, 20, 'Nomer Nota 																																 : '.$da['no_nota']);
$pdf->Text(1, 22, 'Nama Pelanggan 																								: '.$da['nama_R']);
$pdf->Text(1, 23.8, 'Alamat 																																									: '.$da['alamat_konsumen']);
$pdf->Text(1, 25.8, 'Nomer Hp 																																				: '.$da['nohp_konsumen']);
$pdf->Text(1, 27.8, 'Tanggal Transaksi 																				  : ' .date('d-m-Y', strtotime($da['tgl_transaksi'])));
$pdf->Text(1, 29.8, 'Tanggal Selesai 																				  				: ' .date('d-m-Y', strtotime($da['tgl_selesai'])));

$qu = mysqli_query($conn, "SELECT * FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");

while ($d = mysqli_fetch_array($qu)) {
$pdf->SetMargins(-1,1,1);
$pdf->SetFont('Arial','B',3.5);
$pdf->ln(36);
// $pdf->Cell(2, -1.5, 'No', 1, 0, 'C');
$pdf->Cell(39, -5, '','B','');

$pdf->Text(1, 34, 'Jenis Cucian 																																: ' 	.$d['jenis']);
$pdf->Text(1, 35.8, 'Berat 																																													: ' 	.$d['berat']. ' Kg');
$pdf->Text(1, 37.8, 'Jumlah Helai 																																: '.$d['jumlah_helai']. ' pcs');

$pdf->Text(1, 39.8, 'Harga 																																												: Rp.'.number_format($d['jumlah_bayar']));

$pdf->Text(1, 41.8, 'DP 																																																	: Rp.'.number_format($d['dp']));

$pdf->Text(1, 43.8, 'Sisa Kembali 																																: Rp.'.number_format($d['sisa_kembali']));

$pdf->Text(1, 45.8, 'Diskon 																																										: '.number_format($d['diskon']). '%');

}

$nat = mysqli_query($conn, "SELECT *, sum(jumlah_bayar) as jml FROM transaksi left join master on master.id_master=transaksi.id_master left join karyawan on karyawan.id_karyawan=transaksi.id_karyawan left join konsumen on konsumen.nama=transaksi.nama_R where transaksi.nama_R='$a' and transaksi.tgl_transaksi='$b'");

$jan = mysqli_fetch_array($nat); 

$pdf->SetFont('Arial','B',4.4);
$pdf->Text(1, 47.8, 'Total Bayar 																							: Rp.'.number_format($jan['jml']));

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