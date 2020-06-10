<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V11</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <?php echo Asset::css('login/vendor/bootstrap/css/bootstrap.min.css') ?>
    <!--===============================================================================================-->
    <?php echo Asset::css('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>
    <!--===============================================================================================-->
    <?php echo Asset::css('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>
    <!--===============================================================================================-->
    <?php echo Asset::css('login/vendor/animate/animate.css') ?>
    <!--===============================================================================================-->
    <?php echo Asset::css('login/vendor/css-hamburgers/hamburgers.min.css') ?>
    <!--===============================================================================================-->
    <?php echo Asset::css('login/vendor/select2/select2.min.css') ?>
    <!--===============================================================================================-->
    <?php echo Asset::css('login/css/util.css') ?>
    <?php echo Asset::css('login/css/main.css') ?>
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                <form action="/login" method="post" class="login100-form validate-form">
                    <span class="login100-form-title p-b-55">
                        Login
                    </span>

                    <div class="wrap-input100 validate-input m-b-16"
                        data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-envelope"></span>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <span class="lnr lnr-lock"></span>
                        </span>
                    </div>
                    <div class="container-login100-form-btn p-t-25">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center w-full p-t-42 p-b-22">
                        <span class="txt1">
                            Or login with
                        </span>
                    </div>

                    <div class="text-center w-full p-t-115">
                        <span class="txt1">
                            Not a member?
                        </span>
                        <a class="txt1 bo1 hov1" href="/register">
                            Sign up now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <?php echo Asset::js('login/vendor/jquery/jquery-3.2.1.min.js') ?>
    <!--===============================================================================================-->
    <?php echo Asset::js('login/vendor/bootstrap/js/popper.js') ?>
    <?php echo Asset::js('login/vendor/bootstrap/js/bootstrap.min.js') ?>
    <!--===============================================================================================-->
    <?php echo Asset::js('login/vendor/select2/select2.min.js') ?>
    <!--===============================================================================================-->
    <?php echo Asset::js('login/js/main.js') ?>

</body>

</html>