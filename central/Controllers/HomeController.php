<?php

    namespace central\Controllers;

    class HomeController {

        public function index (){
            
            if(isset($_SESSION['login'])){
                \central\Views\mainViews::render('home');
            }else{
                \central\Views\mainViews::render('registrar');
            }
        }
    }
?>