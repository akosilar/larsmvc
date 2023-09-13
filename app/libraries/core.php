<?php
    /*
    * app core class
    * creates url & loads core controller
    * url format - /controller/method/params
    */
    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct() {
            $this->getUrl();
        }

        public function getUrl(){
            echo $_GET['url'];
        }
    }

    
