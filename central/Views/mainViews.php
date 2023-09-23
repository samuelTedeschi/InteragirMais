<?php

    namespace central\Views;

    class mainViews{
        public static function render($filename){
            include('pages/'.$filename.'php');
        }
    }
?>