<?php
    
    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC', 'http://localhost/Social/central/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost/Social/');
    
    $app = new central\App();

    $app->rum();
?>