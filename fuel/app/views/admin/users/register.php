<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

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
</head>

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h2>FUELPHP</h2> Register user                       
                        </div>
                        <?php if(isset($errors)) : ?>
                        <div class="row">
                            <font style="color: red">
                                <?php foreach($errors as $item ): ?>
                                <p><?php echo  $item ?></p>
                                <?php endforeach ?>
                            </font>
                        </div>
                        <?php endif ?>
                        <div class="login-form">
                            <form action="/register" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username"
                                        placeholder="Username" value="<?php echo $content->username; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email"
                                        placeholder="Email" value="<?php echo $content->email; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Password confirm</label>
                                    <input class="au-input au-input--full" type="password" name="password_confirm"
                                        placeholder="Password confirm">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20"
                                    type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="/login">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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