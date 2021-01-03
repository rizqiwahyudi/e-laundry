<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon_1.ico">

    <title>Aplikasi Laundry</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" />
    <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/waves-effect.css" rel="stylesheet">
    <link href="assets/tagsinput/jquery.tagsinput.css" rel="stylesheet" />
    <link href="assets/toggles/toggles.css" rel="stylesheet" />
    <link href="assets/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="assets/timepicker/bootstrap-datepicker.min.css" rel="stylesheet" />
    <link href="assets/colorpicker/colorpicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/jquery-multi-select/multi-select.css"  rel="stylesheet" type="text/css" />
    <link href="assets/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="css/helper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" /><script src="js/modernizr.min.js"></script> </head>
    <link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/chosen.css">
<!-- <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/> -->
    <style type="text/css">
        .tbl-master {
            margin-top: 10px;
        }
        a:hover > .profile {
            background: blue;
        }
    </style>
    <?php include 'koneksi.php'; ?>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
             <ul class="nav navbar-nav navbar-right pull-left">
                                <li class="dropdown">
                                    <a class="profile" data-toggle="dropdown" aria-expanded="true"><img src="images/logoo.png" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                    </ul>
                                </li>
                            </ul>
                        <a href="index.html" class="logo"><span>e-loundry</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>


                            <ul class="nav navbar-nav navbar-right pull-right">

                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">Selamat Datang <img src="images/user.png" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">

                                        <li><a href="logout.php"><i class="md md-settings-power"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="images/user.png" alt="" class="thumb-md img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">user<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="logout.php"><i class="md md-settings-power"></i>&amp; Logout</a></li>
                                </ul>
                            </div>
                            
                            <p class="text-muted m-0">coba</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="?page=home" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-user"></i> <span> Admin Menu </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="?page=karyawan">Karyawan</a></li>
                                    <li><a href="?page=master">Master Jenis Cucian</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php?page=absensi" class="waves-effect"><i class="fas fa-address-card"></i> <span> Absensi </span></a>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fas fa-shopping-cart"></i><span> Transaksi </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="?page=konsumen">Konsumen</a></li>
                                    <li><a href="?page=transaksi">Transaksi</a></li>
                                    <li><a href="?page=riwayat">Riwayat Transaksi</a></li>
                                    <li><a href="?page=pengeluran">Pengeluaran</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>                    
            <div class="content-page">

                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Aplikasi Loundry By Setia Hati</h4>

                            </div>
                        </div>

                        <?php 
                        $page = $_GET['page'];
                        if (!$page) {
                            include 'include/home/home.php';
                        }
                        else {
                            switch ($page) {

                                //konsumen
                                case 'konsumen':
                                    include 'include/konsumen/view_konsumen.php'; 
                                    break;

                                case 'tambahkonsumen':
                                    include 'include/konsumen/tambah_konumen.php'; 
                                    break;

                                case 'editkonsumen':
                                    include 'include/konsumen/edit_konsumen.php';
                                    break;

                                //karyawan
                                case 'karyawan':
                                    include 'include/karyawan/view_karyawan.php';
                                    break;

                                case 'tambah_karyawan':
                                    include 'include/karyawan/tambah.php';
                                    break;

                                 case 'editkaryawan':
                                    include 'include/karyawan/form_edit.php';
                                    break;
                                
                                case 'home':
                                    include 'include/home/home.php';
                                    break;

                                    //Master
                                case 'master':
                                include 'include/master/view_master.php';
                                    break;

                                case 'tambah_master':
                                include 'include/master/tambah.php';
                                    break;

                                case 'editmaster':
                                    include 'include/master/edit_form.php';
                                    break;

                                //Absensi
                                case 'absensi':
                                    include 'include/absensi/view_absensi.php';
                                        break;
                                        
                                //Transaksi
                                case 'transaksi':
                                    include 'include/transaksi/view_transaksi.php';
                                        break;
                                case 'tambah_transaksi':
                                    include 'include/transaksi/tambah.php';
                                    break;
                                case 'edit_transaksi':
                                    include 'include/transaksi/formedit.php';
                                    break;
                                case 'riwayat':
                                    include 'include/transaksi/riwayat.php';
                                    break;
                                case 'nota':
                                    include 'include/transaksi/nota.php';
                                    break;

                                //pengeluaran
                                case 'pengeluran':
                                    include 'include/pengeluaran/view_pengeluaran.php';
                                    break;

                                 case 'tambahkeluaran':
                                    include 'include/pengeluaran/tambah_pengeluaran.php';
                                    break;

                                case 'editpengeluaran':
                                    include 'include/pengeluaran/edit_pengeluaran.php';
                                    break;

                            }
                        }
                        ?>


                    </div> 

                </div> 

                <footer class="footer text-right">
                    copyright &copy; 2016 Ahmad Gunawan | Theme by Moltran.
                </footer>

            </div></div>

            <script>
                var resizefunc = [];
            </script>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/waves.js"></script>
            <script src="js/wow.min.js"></script>
            <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
            <script src="js/jquery.scrollTo.min.js"></script>
            <script src="assets/jquery-detectmobile/detect.js"></script>
            <script src="assets/fastclick/fastclick.js"></script>
            <script src="assets/jquery-slimscroll/jquery.slimscroll.js"></script>
            <script src="assets/jquery-blockui/jquery.blockUI.js"></script>
            <script src="js/jquery.app.js"></script>
            <script src="assets/tagsinput/jquery.tagsinput.min.js"></script>
            <script src="assets/toggles/toggles.min.js"></script>
            <script src="assets/timepicker/bootstrap-timepicker.min.js"></script>
            <script src="assets/timepicker/bootstrap-datepicker.js"></script>
            <script type="text/javascript" src="assets/colorpicker/bootstrap-colorpicker.js"></script>
            <script type="text/javascript" src="assets/jquery-multi-select/jquery.multi-select.js"></script>
            <script type="text/javascript" src="assets/jquery-multi-select/jquery.quicksearch.js"></script>
            <script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/spinner/spinner.min.js"></script>
            <script src="assets/select2/select2.min.js" type="text/javascript"></script>

            <script src="assets/datatables/jquery.dataTables.min.js"></script>
            <script src="assets/datatables/dataTables.bootstrap.js"></script>
            <!-- <script type="text/javascript" src="js/DataTables/datatables.min.js"></script> -->

        <!-- Memanggil Autocomplete.js -->
        <script src="js/jquery.autocomplete.min.js"></script>



            <script type="text/javascript">
                $(document).ready(function() {
                    $('#datatable').dataTable();
                } );
            </script>

            <script type="text/javascript">
            $(document).ready(function() {

                // Selector input yang akan menampilkan autocomplete.
                $( "#nama" ).autocomplete({
                    serviceUrl: "include/transaksi/function_autocomplite.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#nama" ).val("" + suggestion.nama);
                    }
                });
            })
        </script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>


        </body>
        </html>