<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Kenny is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Kenny Admin, kennyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework"/>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Morris Charts CSS -->
    <link href="{{ url('vendors/bower_components/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>
    
    <!-- vector map CSS -->
    <link href="{{ url('vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>
    
    <!-- Data table CSS -->
    <link href="{{ url('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    
    <link href="{{ url('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap Colorpicker CSS -->
    <link href="{{ url('vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet" type="text/css"/>
    
    <!-- Bootstrap Datetimepicker CSS -->
    <link href="{{ url('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css"/>
    
    <!-- Bootstrap Daterangepicker CSS -->
    <link href="{{ url('vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css"/>
            
    <!-- Custom CSS -->
    <link href="{{ url('dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
            <!-- Top Menu Items -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block mr-20 pull-left" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                <a href="/home"><img class="brand-img pull-left" src="{{ url('dist/img/katolec.png') }}" width="88" height="29" alt="brand"/></a>
                <ul class="nav navbar-right top-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                            {{ Auth::user()->name }}<span class="pull-right"><i class="fa fa-fw fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <!-- <li class="divider"></li> -->
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-power-off"></i> {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /Top Menu Items -->
            
            <!-- Left Sidebar Menu -->
            <div class="fixed-sidebar-left">
                <ul class="nav navbar-nav side-nav ">
                    <li>
                        <a href="{{ route('dashboard') }}"><i class="icon-home mr-10"></i>Home</a>
                    </li>
                    <li>
                        <a  href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><i class="icon-doc mr-10"></i>Dokumen Registrasi 
                        <span class="pull-right">
                            
                        <i class="fa fa-fw fa-angle-down"></i></span>
                        </a>
                        <ul id="dashboard_dr" class="collapse collapse-level-1">
                            <li>
                                <a href="index.html">Laporan Pemasukan</a>
                            </li>
                            <li>
                                <a class="active" href="index2.html">Laporan Pengeluaran</a>
                            </li>
                            <li>
                                <a href="index3.html">Laporan</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Left Sidebar Menu -->
         
        <!-- Main Content -->
        <div class="page-wrapper">
            <div class="container-fluid">
          <br>
                @yield('content')
               
            </div>
            <!-- Footer -->
        </div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->
    
    <!-- JavaScript -->
    
    <!-- jQuery -->
    <script src="{{ url('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Moment JavaScript -->
    <script src="{{ url('vendors/bower_components/moment/min/moment-with-locales.min.js') }}"></script>
        
    <!-- Data table JavaScript -->
    <script src="{{ url('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{ url('dist/js/jquery.slimscroll.js') }}"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="{{ url('dist/js/dropdown-bootstrap-extended.js') }}"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="{{ url('vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="{{ url('vendors/bower_components/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('vendors/bower_components/morris.js') }}"></script>
    <script src="{{ url('dist/js/morris-data.js') }}"></script>
    <!-- Bootstrap Colorpicker JavaScript -->
    <script src="{{ url('vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
            
    <!-- Bootstrap Datetimepicker JavaScript -->
    <script src="{{ url('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    
    <!-- Bootstrap Daterangepicker JavaScript -->
    <script src="{{ url('vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    
    <!-- Form Picker Init JavaScript -->
    <script src="{{ url('dist/js/form-picker-data.js') }}"></script>
    
    <!-- Piety JavaScript -->
    <script src="{{ url('vendors/bower_components/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('dist/js/peity-data.js') }}"></script>

    <!-- ChartJS JavaScript -->
    <script src="{{ url('vendors/chart.js') }}"></script>
    
    <!-- Jquery Toast JavaScript -->
    <!-- <script src="{{ url('vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script> -->
    
    <!-- Init JavaScript -->
    <script src="{{ url('dist/js/init.js') }}"></script>
    <script src="{{ url('dist/js/dashboard2-data.js') }}"></script>
</body>
</html>
