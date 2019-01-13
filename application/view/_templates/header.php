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
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/snackbar.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-material-design.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <title>Drosophila suzukii | Sistema Chileno de alerta temprana</title>
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
                <header><a class="navbar-brand">SCATD</a></header>
                <ul class="list-group">
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>">Inicio</a>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>index/diagnostico">Diagnóstico</a>
                    <a class="list-group-item" href="<?php echo Config::get('URL'); ?>profile/index">Perfiles</a>
                </ul>
            </div>
            <main class="bmd-layout-content">