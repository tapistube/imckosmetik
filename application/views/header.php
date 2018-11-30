<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Kosmetik Administrator</title>
    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url();?>/assets2/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/assets2/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="<?php echo base_url();?>/assets2/css//materialize.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets2/css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="<?php echo base_url();?>/assets2/css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url();?>/assets2/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets2/aksesoris/SweetAlert/sweetalert.css" type="text/css" rel="stylesheet">
    <!-- asset IMC sparepart-->


</head>
<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
            <div class="nav-wrapper">
                <ul class="left">
                    <li>
                        <h1 class="logo-wrapper">
                            <a href="<?php echo base_url();?>" class="brand-logo darken-1">
                                <img src="<?php echo base_url();?>assets2/images/logo/materialize-logo.png" alt="logo">
                                <span class="logo-text hide-on-med-and-down">Kosmetik</span>
                            </a>
                        </h1>
                    </li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                            <span class="flag-icon flag-icon-gb"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                            <i class="material-icons">settings_overscan</i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                            <i class="material-icons">notifications_none
                                <small class="notification-badge pink accent-2">2</small>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="<?php echo base_url();?>/assets2/images/avatar/avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <!-- translation-button -->
                <!-- notifications-dropdown -->
                <ul id="notifications-dropdown" class="dropdown-content">
                    <li>
                        <h6>Pemberitahuan
                            <span class="new badge">2</span>
                        </h6>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                            <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> Input nota pembelian oleh admin</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00"></time>
                    </li>
                    <li>
                        <a href="#!" class="grey-text text-darken-2">
                            <span class="material-icons icon-bg-circle amber small">trending_up</span> Laporan bulanan</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00"></time>
                    </li>
                </ul>
                <!-- profile-dropdown -->
                <ul id="profile-dropdown" class="dropdown-content">
                    <li>
                        <a href="#" class="grey-text text-darken-1">
                            <i class="material-icons">settings</i> Settings</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>Login/logout" class="grey-text text-darken-1">
                            <i class="material-icons">keyboard_tab</i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->
