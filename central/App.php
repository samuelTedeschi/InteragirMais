<?php 

    namespace central;

    class App {
        
        private $controller;
        
        private function setApp(){
            $loadName = 'central\Controllers\\';
            $url = explode('/',@$_GET['url']);

            if($url[0] == ''){
                $loadName.='Home';
            }else{
                $loadName.=ucfirst(strtolower($url[0]));
            }

            $loadName.='Controller';

            if(file_exists($loadName.'.php')){

                $this->controller = new $loadName();    
            }else{
                include('Views/pages/404.php');
                die();
            }

        }

        public function rum(){
            $this->setApp();
            $this->controller->index();
        }
    }
?>