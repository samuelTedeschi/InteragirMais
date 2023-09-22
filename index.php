<?php
    
    session_start();
    require('vendor/autoload.php');
    $app = new central\App();

    $app->rum();
?>