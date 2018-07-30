<?php
    require('controller.php');
    $title = 'Log in to TOptions';
?>
<!doctype html>
<html lang="en-us">
    
<head>
        <?php require 'includes/dashboard/head.php'; ?>
    </head>
    <body class="o-page o-page--center">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="o-page__card">
            <div class="c-card u-mb-xsmall">
                <header class="c-card__header u-pt-large">
                    <a class="c-card__icon" href="#!">
                        <img src="img/logo-login.svg" alt="Toption">
                    </a>
                    <h2 class="u-h4 u-text-center u-mb-zero">Continue with Facebook or Twitter</h2>
                </header>
                <?php echo 'http://'.SITE_URL.'/'; ?>
                <form class="c-card__body">
                    <!-- <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input1">Log in with your e-mail address</label> 
                        <input class="c-input" type="email" id="input1" placeholder="clark@dashboard.com"> 
                    </div>

                    <div class="c-field u-mb-small">
                        <label class="c-field__label" for="input2">Password</label> 
                        <input class="c-input" type="password" id="input2" placeholder="Numbers, Letters..."> 
                    </div>

                    <button class="c-btn c-btn--info c-btn--fullwidth" type="submit">Sign in to Dashboard</button> -->

                    <!-- <span class="c-divider c-divider--small has-text u-mv-small">Login via Facebook or Twitter</span> -->

                    <div class="o-line">
                        <a class="c-icon u-bg-twitter" href="<?php echo loginURL('twitter'); ?>">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a class="c-icon u-bg-facebook" href="<?php echo loginURL('facebook'); ?>">
                            <i class="fa fa-facebook"></i>
                        </a>

                    </div>
                </form>
            </div>

           
        </div>

        <!-- Main javascsript -->
        <script src="js/main.min3661.js"></script>

    </body>

</html>