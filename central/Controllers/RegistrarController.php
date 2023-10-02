<?php

    namespace central\Controllers;

    class RegistrarController {

        public function index (){
            
            \central\Views\MainViews::render('registrar');
            
        }
    }
?>