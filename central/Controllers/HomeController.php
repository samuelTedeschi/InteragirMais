<?php

    namespace central\Controllers;

    class HomeController {

        public function index (){
            
            if(isset($_SESSION['login'])){
                \central\Views\MainViews::render('home');
            }else{
                \central\Views\MainViews::render('login');
            }
        }
    }
?>