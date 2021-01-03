<?php 
ini_set('date.timezone', 'Asia/Jakarta');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include '../../koneksi.php';
$id = $_GET['id'];
$ambil = mysqli_query($conn, "SELECT * FROM transaksi inner join master on transaksi.id_master = master.id_master inner join karyawan on transaksi.id_karyawan = karyawan.id_karyawan where no_nota = '$id'"); 
$data = mysqli_fetch_array($ambil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Belanja</title>

    <style>
    .td{
        font-size: 10px;
        font-family: 'Consolas';
    }
    .th{
        font-size: 15px;
        font-family: 'Consolas';
    }
    .tk{
        font-size: 10px;
        font-family: 'Consolas';
        color:#c0c0c0 ;
    }
    </style>
    
</head>
<body>
    <div>
        <table width="250" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <th class="th">LONDRY SEHATI<br>
                 JL. RAYA KEPANJEN  <br>
                 HP 085856886313 <br>
                </th>
            </tr>
            <tr align="center"><td><hr></td></tr>
            <tr>
                <td class="th" align="left">NOMER NOTA : <?php echo $data['jumlah_bayar'] ?> </td>
            </tr>
            <tr align="center"><td><hr></td></tr>
            <tr>
                <td class="td" align="right"><?php echo $data['tgl_transaksi'] ?> |  <?php echo $data['nama_R'] ?></td>
            </tr>
        </table>
        <table width="250" border="0" cellpadding="1" cellspacing="0">
             
        <tr>
            <td colspan="4"><hr></td>
        </tr>
        </table>
        <table width="250" border="0" cellpadding="1" cellspacing="0">
        <tr>
            <td align="right" colspan="right" class="td">Total Berat:</td>
            <td class="td" align="right">Rp .<?php echo $data['berat'] ?> </td>
        </tr>
        <tr>
            <td align="right" colspan="right" class="td">Sub Total Bayar :</td>
            <td align="right" class="td">Rp. <?php echo number_format($data['berat']) ?></td>
        </tr>
        <tr>
            <td align="right" colspan="right" class="td">Jumlah Bayar :</td>
            <td align="right" class="td">Rp. <?php echo number_format($data['jumlah_bayar']) ?></td>
        </tr>
        <tr>
            <td align="right" colspan="right" class="td">Kembalian :</td>
            <td align="right" class="td">Rp. <?php echo number_format($data['kembalian']) ?></td>
        </tr>
        <tr>
            <td align="right" colspan="right" class="td">jumlah Barang :</td>
            <td align="right" class="td"><?php echo $barang ?> Barang</td>
        </tr>
        </table>
        <table width="250" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <br>
                <th class="tk"> -- Terima Kasih Sudah Belanja -- <br>
                </th>
            </tr>
        </table>
    </div>
</body>
<script type="text/javascript">
window.print();
</script>
</html>