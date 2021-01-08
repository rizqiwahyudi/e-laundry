<?php
/*
*Library untuk pemmbuatan aplikasi-aplikasi sederhana
*Oleh : Ahyarudin
*www.ayayayank.com
*/
Class KwtConfig{
	function __Construct(){
		$this->kwNumPattern = "/KHS-KWT/".$this->Tanggal('romawi')."/".$this->Tanggal('th');
	}
}
Class Fungsi extends KwtConfig{	

			function Terbilang($satuan){
			$huruf = array("","SATU","DUA","TIGA","EMPAT","LIMA","ENAM","TUJUH","DELAPAN","SEMBILAN","SEPULUH","SEBELAS");
			if($satuan<12)
			return " ".$huruf[$satuan];
			else if($satuan<20)
			return $this->Terbilang($satuan-10)." BELAS";
			else if($satuan<100)
			return $this->Terbilang($satuan/10)." PULUH".$this->Terbilang($satuan%10);
			elseif($satuan<200)
			return " SERATUS".$this->Terbilang($satuan-100);
			elseif($satuan<1000)
			return $this->Terbilang($satuan/100)." RATUS".$this->Terbilang($satuan%100);
			elseif($satuan<2000)
			return "SERIBU ".$this->Terbilang($satuan-1000);
			elseif($satuan<1000000)
			return $this->Terbilang($satuan/1000)." RIBU".$this->Terbilang($satuan%1000);
			elseif($satuan<1000000000)
			return $this->Terbilang($satuan/1000000)." JUTA".$this->Terbilang($satuan%1000000);
			elseif($satuan>=1000000000)
			echo "hasil terbilang tidak dapat di proses, nilai terlalu besar";
		}
		
		function Ribuan($angka){
			if($angka=='0')
		return '';
		 elseif($angka<100)
		return $angka.',-';
		else
		return number_format($angka,0,'','.').',-';
			}
		
		function Tanggal($param){
			$bulan=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
			$bln=array('JAN','FEB','MAR','APR','MEI','JUN','JUL','AGU','SEP','OKT','NOV','DES');
			$blnRoma=array('I','II','III','IV','V','VI','VII','VIII','IX','X','XI','XII');
			switch($param){
				case 'tgl' : return date('d');//tanggal dengan 2 digit Angka
				break;
				case 'blnL' : return $bulan[date('m')-1];//nama bulan lengkap bahasa Indonesia
				break;
				case 'blnk' : return $bln[date('m')-1];//nama bulan singkat bahasa Indonesia
				break;
				case 'romawi' : return $blnRoma[date('m')-1];//bulan dalam angka romawi;
				break;
				case 'blnAngka' : return date('m'); // bulan dengan angka latin biasa, 2 digit;
				break;
				case 'THN' : return date('Y');//4 digit Tahun
				break;
				case 'th' : return date('y');//2 digit Tahun
				break;
				default: return '';
				}
			}

}
?>
