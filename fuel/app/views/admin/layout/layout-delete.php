<?php 
    if (Auth::check() == false)
    {
        Response::redirect('/login');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <?php echo Asset::img('favicon.png') ?>
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <?php echo Asset::css('layout/node_modules/bootstrap/css/bootstrap.min.css') ?>
    <?php echo Asset::css('layout/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') ?>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <?php echo Asset::css('layout/node_modules/morrisjs/morris.css') ?>
    <!--c3 CSS -->
    <?php echo Asset::css('layout/node_modules/c3-master/c3.min.css') ?>
    <!-- Custom CSS -->
    <?php echo Asset::css('layout/css/style.css') ?>
    <!-- Dashboard 1 Page CSS -->
    <?php echo Asset::css('layout/css/pages/dashboard1.css') ?>
    <!-- You can change the theme colors from here -->
    <?php echo Asset::css('layout/css/colors/default.css') ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo Asset::css('layout/css/my-style.css') ?>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <?php echo Asset::img('logo-icon.png') ?>
                            <!-- Light Logo icon -->
                            <?php echo Asset::img('logo-light-icon.png') ?>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <?php echo Asset::img('logo-text.png') ?>
                            <!-- Light Logo text -->
                            <?php echo Asset::img('logo-light-text.png') ?></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><?php echo Asset::img('1.jpg') ?> <span
                                    class="hidden-md-down">Mark Sanders &nbsp;</span> </a>
                        </li>
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-sign-out-alt" style="font-size: 48px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="/admin/book" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Book</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Tables</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Icons</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">Map</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                                    class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                                    class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                        </li>
                    </ul>
                    <div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/adminwrap/"
                            class="btn waves-effect waves-light btn-info hidden-md-down"> Upgrade to Pro</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <?php if (isset($breadcrumb)): ?>
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/"
                            class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to
                            Pro</a>
                    </div>
                </div>
                <?php endif ?>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->

                <?php echo $content ?>

                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Adminwrap by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php echo Asset::js('layout/node_modules/jquery/jquery.min.js') ?>
    <!-- Bootstrap popper Core JavaScript -->
    <?php echo Asset::js('layout/node_modules/bootstrap/js/popper.min.js') ?>
    <?php echo Asset::js('layout/node_modules/bootstrap/js/bootstrap.min.js') ?>
    <!-- slimscrollbar scrollbar JavaScript -->
    <?php echo Asset::js('layout/js/perfect-scrollbar.jquery.min.js') ?>
    <!--Wave Effects -->
    <?php echo Asset::js('layout/js/waves.js') ?>
    <!--Menu sidebar -->
    <?php echo Asset::js('layout/js/sidebarmenu.js') ?>
    <!--Custom JavaScript -->
    <?php echo Asset::js('layout/js/custom.min.js') ?>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <?php echo Asset::js('layout/node_modules/raphael/raphael-min.js') ?>
    <?php echo Asset::js('layout/node_modules/morrisjs/morris.min.js') ?>
    <!--c3 JavaScript -->
    <?php echo Asset::js('layout/node_modules/d3/d3.min.js') ?>
    <?php echo Asset::js('layout/node_modules/c3-master/c3.min.js') ?>
    <!-- Chart JS -->
    <?php echo Asset::js('layout/js/dashboard1.js') ?>
</body>

</html>