<!doctype html>
<html lang="en-us">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Invoices | Toption</title>
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
                        <a class="c-sidebar__link is-active" href="transactions.php">
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

                <h2 class="c-navbar__title u-mr-auto">Transactions</h2>
                <a href="#!" class="c-btn c-btn--secondary u-mr-small"><i class="fa fa-cloud-upload u-mr-xsmall"></i>Deposit</a>
                    <a class="c-btn c-btn--primary u-mr-xsmall" href="#!">
                        <i class="fa fa-cloud-download u-mr-xsmall"></i>Withdraw
                    </a>
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
                <div class="row">
                    <div class="col-lg-8">
                        <div class="c-card u-mb-medium" data-mh="invoices-cards">
                            <div class="c-card__header c-card__header--transparent o-line u-border-bottom-zero">
                                <h3 class="c-card__title">Monthly Summary
                                    <span class="u-block u-text-mute u-text-xsmall">
                                        February 2017 (12 Days Remaining)
                                    </span>
                                </h3>

                                <div class="c-card__meta u-relative">
                                    <a class="dropdown-toggle" href="#" id="dropdwonMenuCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="u-text-mute u-opacity-heavy fa fa-ellipsis-h"></i>
                                    </a>

                                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right fade" aria-labelledby="dropdwonMenuCard1">
                                        <a class="c-dropdown__item" href="#">Link 1</a>
                                        <a class="c-dropdown__item" href="#">Link 2</a>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="c-summary has-divider">
                                        <h5 class="c-summary__title">Invoiced</h5>
                                        <h5 class="c-summary__number">$2,190
                                            <span class="c-summary__status u-bg-success">
                                                <i class="fa fa-caret-up"></i>
                                            </span>
                                        </h5>
                                        <p class="c-summary__meta">Last Month: $2,890</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="c-summary has-divider">
                                        <h5 class="c-summary__title">Profit</h5>
                                        <h5 class="c-summary__number">$2,190
                                            <span class="c-summary__status u-bg-danger">
                                                <i class="fa fa-caret-down"></i>
                                            </span>
                                        </h5>
                                        <p class="c-summary__meta">Last Month: $2,890</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="c-summary">
                                        <h5 class="c-summary__title">Expenses</h5>
                                        <h5 class="c-summary__number">$2,190
                                            <span class="c-summary__status u-bg-success">
                                                <i class="fa fa-caret-up"></i>
                                            </span>
                                        </h5>
                                        <p class="c-summary__meta">Last Month: $2,890</p>
                                    </div>
                                </div>
                            </div><!-- // .row -->
                        </div><!-- // .c-card -->
                    </div>

                    <div class="col-lg-4">
                        <div class="c-card u-p-medium u-mb-medium" data-mh="invoices-cards">

                            <div class="o-line">
                                <h4 class="c-card__title">Percentual Profit
                                    <span class="u-block u-text-mute u-text-xsmall">Quarterly (3 Months)</span>
                                </h4> 

                                <div class="c-card__meta">
                                    <a class="dropdown-toggle" href="#" id="dropdwonMenuCard2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="u-text-mute u-opacity-heavy fa fa-ellipsis-h"></i>
                                    </a>

                                    <div class="c-dropdown__menu dropdown-menu dropdown-menu-right fade" aria-labelledby="dropdwonMenuCard2">
                                        <a class="c-dropdown__item" href="#">Link 1</a>
                                        <a class="c-dropdown__item" href="#">Link 2</a>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-2 u-pr-zero">
                                    <div class="c-chart-container">
                                        <canvas id="js-chart-profit-q1" height="85"></canvas>
                                    </div>
                                    <h5 class="c-chart__title">Q2 - 17</h5>
                                </div>
                                <div class="col-2 u-pr-zero">
                                    <div class="c-chart-container">
                                        <canvas id="js-chart-profit-q2" height="85"></canvas>
                                    </div>
                                    <h5 class="c-chart__title">Q2 - 17</h5>
                                </div>

                                <div class="col-2 u-pr-zero">
                                    <div class="c-chart-container">
                                        <canvas id="js-chart-profit-q3" height="85"></canvas>
                                    </div>
                                    <h5 class="c-chart__title">Q2 - 17</h5>
                                </div>

                                <div class="col-2 u-pr-zero">
                                    <div class="c-chart-container">
                                        <canvas id="js-chart-profit-q4" height="85"></canvas>
                                    </div>
                                    <h5 class="c-chart__title">Q2 - 17</h5>
                                </div>

                                <div class="col-2 u-pr-zero">
                                    <div class="c-chart-container">
                                        <canvas id="js-chart-profit-q5" height="85"></canvas>
                                    </div>
                                    <h5 class="c-chart__title">Q2 - 17</h5>
                                </div>

                                <div class="col-2 u-pr-zero">
                                    <div class="c-chart-container">
                                        <canvas id="js-chart-profit-q6" height="85"></canvas>
                                    </div>
                                    <h5 class="c-chart__title">Q2 - 17</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row u-mb-large">
                    <div class="col-md-12">
                        <div class="c-table-responsive@wide">
                            <table class="c-table">
                                <caption class="c-table__title">
                                    Invoices
                                </caption>
                                <thead class="c-table__head c-table__head--slim">
                                    <tr class="c-table__row">
                                        <th class="c-table__cell c-table__cell--head">No.</th>
                                        <th class="c-table__cell c-table__cell--head">Invoice Subject</th>
                                        <th class="c-table__cell c-table__cell--head">Client</th>
                                        <th class="c-table__cell c-table__cell--head">VAT No.</th>
                                        <th class="c-table__cell c-table__cell--head">Created</th>
                                        <th class="c-table__cell c-table__cell--head">Status</th>
                                        <th class="c-table__cell c-table__cell--head">Price</th>
                                        <th class="c-table__cell c-table__cell--head">
                                            <span class="u-hidden-visually">Actions</span>
                                        </th>
                                        <th class="c-table__cell c-table__cell--head">
                                            <span class="u-hidden-visually">Download</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">Design Works</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Carlson Limited</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87956621</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">15 Dec 2017</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--success">Paid</span>
                                        </td>
                                        <td class="c-table__cell">$887</td>

                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">UX Wireframes</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Adobe</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87956421</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">12 Apr 2017</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--warning">Pending</span>
                                        </td>
                                        <td class="c-table__cell">$1200</td>
                                        <td class="c-table__cell  u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton20">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00452</span></td>
                                        <td class="c-table__cell">New Dashboard</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Bluewolf</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87952621</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">23 Oct 2017</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--warning">Pending</span>
                                        </td>
                                        <td class="c-table__cell">$534</td>
                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton30" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton30">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">Landing Page</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Salesforce</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87953421</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">2 Sep 2017</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--secondary">Due in 2 Weeks</span>
                                        </td>
                                        <td class="c-table__cell">$1500</td>
                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton40" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton40">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">Marketing Templates</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Printic</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87956621</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">29 Jan 2018</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--danger">Paid Today</span>
                                        </td>
                                        <td class="c-table__cell">$648</td>
                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton50" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton50">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">Sales Presentation</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Tabdaq</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87956621</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">4 Feb 2018</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--secondary">Due in 3 Weeks</span>
                                        </td>
                                        <td class="c-table__cell">$300</td>
                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton60" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton60">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">Logo & Print</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Apple</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87956621</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">22 Mar 2018</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--success">Paid Today</span>
                                        </td>
                                        <td class="c-table__cell">$2500</td>
                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton70" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton70">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->

                                    <tr class="c-table__row">
                                        <td class="c-table__cell"><span class="u-text-mute">00450</span></td>
                                        <td class="c-table__cell">Icons</td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">Tookapic</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">87956621</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="u-text-mute">13 May 2018</span>
                                        </td>
                                        <td class="c-table__cell">
                                            <span class="c-badge c-badge--small c-badge--success">Paid Today</span>
                                        </td>
                                        <td class="c-table__cell">$940</td>
                                        <td class="c-table__cell u-text-right">
                                            <a href="invoice.html" class="c-btn c-btn--info u-mr-xsmall">Manage</a>
                                            <div class="c-dropdown dropdown">
                                                <button class="c-btn c-btn--secondary has-dropdown dropdown-toggle" id="dropdownMenuButton80" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                
                                                <div class="c-dropdown__menu dropdown-menu" aria-labelledby="dropdownMenuButton80">
                                                    <a class="c-dropdown__item dropdown-item" href="#">Complete</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Share</a>
                                                    <a class="c-dropdown__item dropdown-item" href="#">Archive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="c-table__cell">
                                            <a class="u-text-mute" href="invoice.html">
                                                <i class="fa fa-cloud-download"></i>
                                            </a>
                                        </td>
                                    </tr><!-- // .table__row -->
                                </tbody>
                            </table>
                        </div><!-- // .c-card -->
                    </div>
                </div><!-- // .row -->
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