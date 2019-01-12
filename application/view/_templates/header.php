<!DOCTYPE html>
<html class="h-100" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://drosophila.ml 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <base href="<?php echo Config::get('URL'); ?>" />
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/roboto.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.min.css">
        <link rel="stylesheet" type="text/css" href="css/solid.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
        <title>Drosophila suzukii | Sistema Chileno de alerta temprana</title>
        <link rel="icon" href="data:;base64,=">
    </head>
    <body class="h-100">
        <div class="bmd-layout-container bmd-drawer-f-r bmd-drawer-overlay">
            <header class="bmd-layout-header bg-wetrust">
                <div class="navbar text-white bg-faded">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><strong>SCATD</strong></li>
                    </ul>
                    <button class="btn mb-0 pb-0 text-white" type="button" data-toggle="drawer" data-target="#dw-p1">
                        <span class="sr-only">Toggle drawer</span>
                            <i class="material-icons">more_vert</i>
                    </button>
                </div>
            </header>
            <div id="dw-p1" class="bmd-layout-drawer bg-faded">
                <header><a class="navbar-brand" href="<?php echo Config::get('URL'); ?>">SCATD</a></header>
                <ul class="list-group">
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>">Inicio</a>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>profile/index">Perfiles</a>
                <?php if (Session::userIsLoggedIn()) { ?>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>dashboard/index">Panel</a>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>note/index">Mis Apuntes</a>
                <?php } else { ?>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>register/index">Registrar</a>
                <?php } ?>
                <?php if (Session::userIsLoggedIn()) { ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarUser" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Session::get('user_name'); ?> </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarUser">
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/index">My Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a>
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a>
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a>
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a>
                        <a class="dropdown-item" href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
                        <div class="dropdown-divider"></div>
                        <?php if (Session::get("user_account_type") == 7) : ?>
                            <a class="dropdown-item <?php if (View::checkForActiveController($filename, "admin")) {echo 'active';} ?>" href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                        <?php endif; ?>
                    </div>
                <?php } else { ?>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>login/index">Ingresar</a>
                <?php } ?>
                </ul>
            </div>
            <main class="bmd-layout-content">
