<?php 
    if (Auth::check() == false)
    {
        Response::redirect('/login');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <?php echo Asset::css('layout/css/font-face.css') ?>
    <?php echo Asset::css('layout/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>
    <?php echo Asset::css('layout/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>
    <?php echo Asset::css('layout/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>

    <!-- Bootstrap CSS-->
    <?php echo Asset::css('layout/vendor/bootstrap-4.1/bootstrap.min.css') ?>
    <!-- Vendor CSS-->
    <?php echo Asset::css('layout/vendor/animsition/animsition.min.css') ?>
    <?php echo Asset::css('layout/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>
    <?php echo Asset::css('layout/vendor/wow/animate.css') ?>
    <?php echo Asset::css('layout/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>
    <?php echo Asset::css('layout/vendor/css-hamburgers/hamburgers.min.css') ?>
    <?php echo Asset::css('layout/vendor/slick/slick.css') ?>
    <?php echo Asset::css('layout/vendor/select2/select2.min.css') ?>
    <?php echo Asset::css('layout/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>
    <?php echo Asset::css('layout/vendor/vector-map/jqvmap.min.css') ?>

    <!-- Main CSS-->
    <?php echo Asset::css('layout/css/theme.css') ?>
    <!-- my css file -->
    <?php echo Asset::css('myCss.css') ?>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <h2 style="color: white !important;">FUELPHP</h2>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                            <a class="js-arrow" href="/admin/export">
                                <i class="fas fa-copy"></i>Export
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="/admin/user">
                                <i class="fas fa-copy"></i>Users
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="/admin/book">
                                <i class="fas fa-copy"></i>Book
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="/admin/book">
                                <i class="fas fa-copy"></i>Import excel
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="/admin/upload">
                                <i class="fas fa-copy"></i>Upload file
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <?php echo Asset::img('layout/images/icon/logo-white.png') ?>
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="/logout">
                                            <i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <?php echo Asset::img('layout/images/icon/logo-white.png') ?>
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <?php echo Asset::img('layout/images/icon/avatar-big-01.jpg') ?>
                        </div>
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Export
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-copy"></i>Excel</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class="fas fa-copy"></i>Pdf</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">
                                            <i class="fas fa-copy"></i>Csv</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="inbox.html">
                                    <i class="fas fa-chart-bar"></i>Inbox</a>
                                <span class="inbox-num">3</span>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>eCommerce</a>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-trophy"></i>Features
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="table.html">
                                            <i class="fas fa-table"></i>Tables</a>
                                    </li>
                                    <li>
                                        <a href="form.html">
                                            <i class="far fa-check-square"></i>Forms</a>
                                    </li>
                                    <li>
                                        <a href="calendar.html">
                                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                                    </li>
                                    <li>
                                        <a href="map.html">
                                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-copy"></i>Pages
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="login.html">
                                            <i class="fas fa-sign-in-alt"></i>Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">
                                            <i class="fas fa-user"></i>Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">
                                            <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-desktop"></i>UI Elements
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="button.html">
                                            <i class="fab fa-flickr"></i>Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">
                                            <i class="fas fa-comment-alt"></i>Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">
                                            <i class="far fa-window-maximize"></i>Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">
                                            <i class="far fa-id-card"></i>Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">
                                            <i class="far fa-bell"></i>Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">
                                            <i class="fas fa-tasks"></i>Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">
                                            <i class="far fa-window-restore"></i>Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">
                                            <i class="fas fa-toggle-on"></i>Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">
                                            <i class="fas fa-th-large"></i>Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">
                                            <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">
                                            <i class="fas fa-font"></i>Typography</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <a href="/admin">
                                                <li class="list-inline-item active">
                                                    <i class="fa fa-home"></i>
                                                </li>
                                            </a>
                                            <?php if(!empty($breadcrumb)): ?>
                                                <?php foreach($breadcrumb as $key => $item): ?>
                                                    <?php if($key == 0) continue ?>
                                                    <li class="list-inline-item seprate">
                                                        <span>/</span>
                                                    </li>
                                                    <?php if(count($breadcrumb) == $key + 1): ?>
                                                        <li class="list-inline-item"><?php echo $item->name; ?></li>
                                                    <?php else: ?>
                                                        <a href="<?php echo $item->link; ?>">
                                                            <li class="list-inline-item"><?php echo $item->name; ?></li>
                                                        </a>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php echo $content ?>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <?php echo Asset::js('layout/vendor/jquery-3.2.1.min.js') ?>
    <!-- Bootstrap JS-->
    <?php echo Asset::js('layout/vendor/bootstrap-4.1/popper.min.js') ?>
    <?php echo Asset::js('layout/vendor/bootstrap-4.1/bootstrap.min.js') ?>
    <!-- Vendor JS       -->
    <?php echo Asset::js('layout/vendor/slick/slick.min.js') ?>
    <?php echo Asset::js('layout/vendor/wow/wow.min.js') ?>
    <?php echo Asset::js('layout/vendor/animsition/animsition.min.js') ?>
    <?php echo Asset::js('layout/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>
    <?php echo Asset::js('layout/vendor/counter-up/jquery.waypoints.min.js') ?>
    <?php echo Asset::js('layout/vendor/counter-up/jquery.counterup.min.js') ?>
    <?php echo Asset::js('layout/vendor/circle-progress/circle-progress.min.js') ?>
    <?php echo Asset::js('layout/vendor/perfect-scrollbar/perfect-scrollbar.js') ?>
    <?php echo Asset::js('layout/vendor/chartjs/Chart.bundle.min.js') ?>
    <?php echo Asset::js('layout/vendor/select2/select2.min.js') ?>
    <?php echo Asset::js('layout/vendor/vector-map/jquery.vmap.js') ?>
    <?php echo Asset::js('layout/vendor/vector-map/jquery.vmap.min.js') ?>
    <?php echo Asset::js('layout/vendor/vector-map/jquery.vmap.sampledata.js') ?>
    <?php echo Asset::js('layout/vendor/vector-map/jquery.vmap.world.js') ?>

    <!-- Main JS-->
    <?php echo Asset::js('layout/js/main.js') ?>

</body>

</html>
<!-- end document-->
