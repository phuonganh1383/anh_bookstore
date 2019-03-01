<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Book Store</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- <base href="{{asset('public')}}" > -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{asset('source/pluginsadmin/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('source/pluginsadmin/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('source/pluginsadmin/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('source/pluginsadmin/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('source/cssadmin/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('source/cssadmin/themes/all-themes.css')}}" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link href="{{asset('source/pluginsadmin/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet" />

</head>

<body class="theme-red">
    <div class="overlay"></div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">BOOK STORE</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                @if(Session::has('username'))
                    <li><a>Hello {{Session::get('firstname')}} </a> </li>
                    <li><a href="listmybook">My favorite book</a></li>
                    <li><a href="{{asset('logout')}}">Logout</a></li>

                @endif
   

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                  <!--   <li class="header">MAIN NAVIGATION</li> -->

                    <li>
                        <a href="{{asset('listbook')}}">
                            <i class="material-icons">text_fields</i>
                            <span>List Book</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{asset('listuser')}}">
                            <i class="material-icons">text_fields</i>
                            <span>List User</span>
                        </a>
                    </li>
                    
                



                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">BOOK STORE</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    

@yield('noidungthaydoi')

<!-- bảng phân màu -->





    <!-- Jquery Core Js -->
    <script src="{{asset('source/pluginsadmin/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('source/pluginsadmin/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('source/pluginsadmin/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('source/pluginsadmin/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('source/pluginsadmin/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <!-- <script src="{{asset('source/pluginsadmin/jquery-countto/jquery.countTo.js')}}"></script> -->

    <!-- Morris Plugin Js -->
<!--     <script src="{{asset('source/pluginsadmin/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/morrisjs/morris.js')}}"></script> -->

    <!-- ChartJs -->
    <script src="{{asset('source/pluginsadmin/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
<!--     <script src="{{asset('source/pluginsadmin/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/flot-charts/jquery.flot.time.js')}}"></script> -->

        <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('source/pluginsadmin/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('source/pluginsadmin/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <!-- <script src="{{asset('source/pluginsadmin/jquery-sparkline/jquery.sparkline.js')}}"></script> -->
    <script src="{{asset('source/jsadmin/pages/tables/jquery-datatable.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('source/jsadmin/admin.js')}}"></script>
    <!-- <script src="{{asset('source/jsadmin/pages/index.js')}}"></script> -->

    <!-- Demo Js -->
    <script src="{{asset('source/jsadmin/demo.js')}}"></script>
</body>

</html>
