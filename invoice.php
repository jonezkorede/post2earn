<!doctype html>
<html lang="en-us">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Invoice | Toption</title>
        <meta name="description" content="Toption">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/main.min3661.css?v=2.0">
    </head>
    <body class="o-page">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="o-page__sidebar js-page-sidebar">
            <div class="c-sidebar">
                <a class="c-sidebar__brand" href="#">
                    <img class="c-sidebar__brand-img" src="img/logo.png" alt="Logo"> Dashboard
                </a>
                
                <h4 class="c-sidebar__title">Menu</h4>
                <ul class="c-sidebar__list">

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="./">
                            <i class="fa fa-home u-mr-xsmall"></i>Overview
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="earnings.php">
                            <i class="fa fa-tachometer u-mr-xsmall"></i>Earnings <span class="c-badge c-badge--success c-badge--xsmall u-ml-xsmall">New</span>
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" href="transactions.php">
                            <i class="fa fa-line-chart u-mr-xsmall"></i>Transactions
                        </a>
                    </li>

                    <li class="c-sidebar__item">
                        <a class="c-sidebar__link" target="_blank" href="profile.php">
                            <i class="fa fa-table u-mr-xsmall"></i>Profile
                        </a>
                    </li>
                    <li class="c-sidebar__item">
                       <a class="c-sidebar__link"  href="account-settings.php">
                            <i class="fa fa-table u-mr-xsmall"></i>Account Settings
                        </a>
                    </li>
                </ul>
            </div><!-- // .c-sidebar -->
        </div><!-- // .o-page__sidebar -->

        <main class="o-page__content">
            <header class="c-navbar u-mb-medium">
                <button class="c-sidebar-toggle js-sidebar-toggle">
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                    <span class="c-sidebar-toggle__bar"></span>
                </button>

                <h2 class="c-navbar__title u-mr-auto">Single Invoice</h2>
                <a href="#!" class="c-btn c-btn--success u-mr-small">New Invoice</a>

                <div class="c-dropdown dropdown">
                    <a  class="c-avatar c-avatar--xsmall has-dropdown dropdown-toggle" href="#" id="dropdwonMenuAvatar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="c-avatar__img" src="img/avatar-72.jpg" alt="User's Profile Picture">
                    </a>

                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right" aria-labelledby="dropdwonMenuAvatar">
                        <a class="c-dropdown__item dropdown-item" href="account-settings.php">Edit Profile</a>
                        <a class="c-dropdown__item dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </header>

            <div class="container">
                <div class="row u-mb-medium u-justify-center">
                    <div class="col-xl-9">
                        <div class="c-invoice">

                            <div class="c-invoice__header">
                                <div class="c-invoice__brand">
                                    <img class="c-invoice__brand-img" src="img/logo.png" alt="Dashboard's Logo"> 
                                    <h1 class="c-invoice__brand-name">Dashboard Pty Ltd</h1>
                                </div>

                                <div class="c-invoice__title">
                                    <h4>Invoice</h4>
                                    <div class="c-invoice__date">22 December 2017</div>
                                </div>
                            </div>
                            
                            <div class="c-invoice__details">
                                <div class="c-invoice__company">
                                    <span class="u-text-mute u-text-uppercase u-text-xsmall">From:</span>
                                    <div class="c-invoice__company-name">
                                        Dashboard Inc
                                    </div>

                                    <div class="c-invoice__company-address">
                                        39 Timber Road,<br>
                                        Los Angeles, CA 97446<br>
                                        United States
                                    </div>
                                </div>

                                <div class="c-invoice__company">
                                    <span class="u-text-mute u-text-uppercase u-text-xsmall">To:</span>
                                    <div class="c-invoice__company-name">
                                        Client Inc
                                    </div>

                                    <div class="c-invoice__company-address">
                                        248 Turkey Ave,<br>
                                        Columbus, AL 31901<br>
                                        United States
                                    </div>
                                </div>
                            </div>

                            <div class="c-invoice__body">
                                <div class="c-invoice__desc">
                                    Invoice # <br> 
                                    <span class="c-invoice__number">HSFB 342823</span>
                                </div>
                                <div class="c-invoice__table">
                                    <table class="c-table">
                                        <thead class="c-table__head c-table__head--slim">
                                            <tr class="c-table__row">
                                                <th class="c-table__cell c-table__cell--head">Description</th>
                                                <th class="c-table__cell c-table__cell--head">Qty</th>
                                                <th class="c-table__cell c-table__cell--head">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="c-table__row">
                                                <td class="c-table__cell">Website Design</td>
                                                <td class="c-table__cell">2</td>
                                                <td class="c-table__cell">$4,500</td>
                                            </tr>
                                            <tr class="c-table__row">
                                                <td class="c-table__cell">UI Development</td>
                                                <td class="c-table__cell">3</td>
                                                <td class="c-table__cell">$7,500</td>
                                            </tr>
                                            <tr>
                                                <td class="c-table__cell">Landing Page</td>
                                                <td class="c-table__cell">1</td>
                                                <td class="c-table__cell">$2,320</td>
                                            </tr>
                                        </tbody>

                                        <tfoot>
                                            <tr class="c-table__row">
                                                <td class="c-table__cell" colspan="2"><strong>Total</strong></td>
                                                <td class="c-table__cell"><strong>$15,490</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <div class="c-invoice__terms">
                                        All amounts shown on this invoice are in US dollars.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="c-invoice__footer">

                                <div class="c-invoice__footer-brand">
                                    <img src="img/logo.png" alt="Dashboard Logo">
                                    <span>Toption</span>
                                </div>

                                <div class="c-invoice__footer-info">
                                    <span>hello@dashboard.com</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- // .o-page__content -->

        <!-- Main javascsript -->
        <script src="js/main.min3661.js?v=2.0"></script>

        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-88739867-2','auto');ga('send','pageview')
        </script>
        <script src="../../www.google-analytics.com/analytics.js" async defer></script>
    </body>

</html>