<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Çalışma</title>

    <!-- Bootstrap -->
    <link href="/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/backend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/backend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/backend/build/css/custom.min.css" rel="stylesheet">

    <link href="/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="/backend/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="/backend/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="/backend/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    @yield('css')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Hoşgeldiniz,</span>
                        <h2>Ogün Öksüz</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br/>
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href="/admin"><i class="fa fa-home"></i> Anasayfa </a></li>
                            <li><a><i class="fa fa-paper-plane-o"></i> Blog <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="/admin/blog">Bloglar</a></li>
                                    <li><a href="/admin/blog/blogEkle">Blog Ekle</a></li>
                                </ul>
                            </li>
                            <li><a href="/admin/kategori"><i class="fa fa-book"></i> Kategori </a></li>
                            <li><a href="/admin/hakkimizda"><i class="fa fa-spinner"></i> Hakkımızda </a></li>
                            <li><a href="/admin/ayarlar"><i class="fa fa-cog"></i> Ayarlar </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">1</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
        @yield('icerik')

        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/backend/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/backend/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/backend/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="/backend/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="/backend/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="/backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/backend/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="/backend/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/backend/vendors/Flot/jquery.flot.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.pie.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.time.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.stack.js"></script>
<script src="/backend/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/backend/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/backend/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/backend/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="/backend/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="/backend/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="/backend/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/backend/vendors/moment/min/moment.min.js"></script>
<script src="/backend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="/backend/vendors/bootstrap-progressbar/bootstrap-progressb
ar.min.js"></script>
<!-- iCheck -->
<script src="/backend/vendors/iCheck/icheck.min.js"></script>
<!-- PNotify -->
<script src="/backend/vendors/pnotify/dist/pnotify.js"></script>
<script src="/backend/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="/backend/vendors/pnotify/dist/pnotify.nonblock.js"></script>

<!-- Custom Theme Scripts -->
<script src="/backend/build/js/custom.min.js"></script>
<script src="/js/jquery.form.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/messages_tr.min.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>

@yield('js')
</body>
</html>

