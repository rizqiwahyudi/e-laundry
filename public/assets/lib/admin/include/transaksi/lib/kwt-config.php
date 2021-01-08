<?php
Class KwtConfig{
	function __Construct(){
		$this->dbhost = 'localhost';
		$this->dbuser = 'root';
		$this->dbpass = '';
		$this->dbName = 'kwitansi';
		$this->conn = mysql_connect($this->dbhost, $this->dbuser, $this->dbpass);
		$this->kwNumPattern = "/KHS-KWT/".$this->Tanggal('romawi')."/".$this->Tanggal('th');
	}
}
?>