<?php

if (!defined('BASE_URL')) {
    // AQUI PONGAN EL URL DE SU PROYECTO  Y MODIIFIQUEN PARA  FUNCIONE EN SU PC
    define('BASE_URL', 'http://localhost/WEB_III/ESTRUCTURA_BASICA/');
}

if (!defined('LOGO_URL')) {
    define('LOGO_URL', BASE_URL . 'assets/images/logo.png');
}

// PUEDEN PONER LAS URL QUE UTILICEN PARA SU PROYECTO

if (!defined('PAGE_INICIO')) {
    define('PAGE_INICIO', BASE_URL . 'pages/inicio.php');
}

if (!defined('PAGE_1')) {
    define('PAGE_1', BASE_URL . 'pages/page1.php');
}

if (!defined('PAGE_2')) {
    define('PAGE_2', BASE_URL . 'pages/page2.php');
}

if (!defined('PAGE_3')) {
    define('PAGE_3', BASE_URL . 'pages/page3.php');
}

if (!defined('PAGE_4')) {
    define('PAGE_4', BASE_URL . 'pages/page4.php');
}