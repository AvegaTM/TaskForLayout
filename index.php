<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once 'vendor/autoload.php';
    require_once 'include/Controller.php';
    
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $smarty = new Smarty();
    $ts = new Controller($smarty);
    