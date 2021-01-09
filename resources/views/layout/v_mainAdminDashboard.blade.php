<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('/assets/lib/admin/images/logoo.png') }}">

    <title>@yield('title')</title>


    <link href="{{ asset('/assets/lib/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/assets/font-awesome/css/all.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/css/material-design-iconic-font.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/lib/admin/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/css/waves-effect.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/lib/admin/assets/tagsinput/jquery.tagsinput.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/assets/toggles/toggles.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/assets/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/assets/timepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/lib/admin/assets/colorpicker/colorpicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/lib/admin/assets/jquery-multi-select/multi-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/lib/admin/assets/select2/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/lib/admin/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/lib/admin/css/style.css') }}" rel="stylesheet" type="text/css" />
    <script src="js/modernizr.min.js"></script>
</head>
<link href="{{ asset('/assets/lib/admin/assets/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('/assets/lib/admin/css/chosen.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/lib/admin/assetss/select2-master/dist/css/select2.min.css') }}" />
<!-- <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/> -->
<style type="text/css">
    .tbl-master {
        margin-top: 10px;
    }

    a:hover>.profile {
        background: blue;
    }
</style>

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
                            <a class="profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('/assets/lib/admin/images/logoo.png') }}" alt="user-img" class="img-circle"> </a>
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
                                <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true">Selamat Datang <img src="{{ asset('/assets/lib/admin/images/user.png') }}" alt="user-img" class="img-circle"> </a>
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
                        <img src="{{ asset('/assets/lib/admin/images/user.png') }}" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
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
                            <a href="{{ url('/dashboard') }}" class="waves-effect"><i class="md md-home"></i><span> Dashboard </span></a>
                        </li>
                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="fa fa-user"></i> <span> Admin Menu </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/dashboard/karyawan') }}">Karyawan</a></li>
                                <li><a href="{{ url('/dashboard/master') }}">Master Jenis Cucian</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('/dashboard/absensi') }}" class="waves-effect"><i class="fas fa-address-card"></i> <span> Absensi </span></a>
                        </li>
                        <li class="has_sub">
                            <a href="#" class="waves-effect"><i class="fas fa-shopping-cart"></i><span> Transaksi </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ url('/dashboard/konsumen') }}">Konsumen</a></li>
                                <li><a href="{{ url('/dashboard/transaksi') }}">Transaksi</a></li>
                                <li><a href="{{ url('/dashboard/riwayat-transaksi') }}">Riwayat Transaksi</a></li>
                                <li><a href="{{ url('/dashboard/pengeluaran') }}">Pengeluaran</a></li>
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
                            <h4 class="pull-left page-title">Aplikasi Loundry By Mr.Erko Bani</h4>
                        </div>
                    </div>

                    <!-- Content -->
                    @yield('content')
                    <!-- End Content -->
                </div>

            </div>

            <footer class="footer text-right">
                copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                By <b>SakeraDev.ID</b>
            </footer>

        </div>
    </div>

    <script>
        var resizefunc = [];
    </script>
    <script src="{{ asset('/assets/lib/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/js/waves.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/js/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/assets/lib/admin/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/jquery-detectmobile/detect.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/fastclick/fastclick.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/jquery-blockui/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/js/jquery.app.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/tagsinput/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/toggles/toggles.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/timepicker/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/lib/admin/assets/colorpicker/bootstrap-colorpicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/lib/admin/assets/jquery-multi-select/jquery.multi-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/lib/admin/assets/jquery-multi-select/jquery.quicksearch.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/bootstrap-inputmask/bootstrap-inputmask.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('/assets/lib/admin/assets/spinner/spinner.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/select2/select2.min.js" type="text/javascript') }}"></script>

    <script src="{{ asset('/assets/lib/admin/assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assets/datatables/dataTables.bootstrap.js') }}"></script>
    <!-- <script type="text/javascript" src="js/DataTables/datatables.min.js"></script> -->
    <!-- <script type="text/javascript" src="jquery/jquery-ui.min.js"></script> -->
    <!-- Memanggil Autocomplete.js -->
    <script src="{{ asset('/assets/lib/admin/js/jquery.autocomplete.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/admin/assetss/select2-master/dist/js/select2.min.js') }}"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').dataTable();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            // Selector input yang akan menampilkan autocomplete.
            $("#nama").autocomplete({
                serviceUrl: "include/transaksi/function_autocomplite.php", // Kode php untuk prosesing data.
                dataType: "JSON", // Tipe data JSON.
                onSelect: function(suggestion) {
                    $("#nama").val("" + suggestion.nama);
                }
            });
        })
    </script>

    <script>
        $(document).ready(function() {
            selesai();
        })

        function selesai() {
            setTimeout(function() {
                jumlahtransaksi();
                transaksiharini();
                selesai();
            }, 200);
        }

        function jumlahtransaksi() {
            $.getJSON('include/home/datajson.php', function(data) {
                $("#tmptransaksi").empty();
                $.each(data.result, function() {
                    $("#tmptransaksi").append(
                        this['count']
                    );
                });
            });
        }

        function transaksiharini() {
            $.getJSON('include/home/jumlahtransaksi.php', function(data) {
                $("#transaksiharini").empty();
                $.each(data.result, function() {
                    $("#transaksiharini").append(
                        this['count']
                    );
                });
            });
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#kota").select2({
                placeholder: "Please Select"
            });
        });
    </script>


</body>

</html>