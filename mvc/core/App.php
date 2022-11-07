<?php 
    class App
    {
        // http://localhost/website_ecomerce/Home/Sayhi/1/2/3
        protected $controller="Home";
        protected $action="sayHi";
        protected $params=[];

        function __construct()
        {
            $url = $this->urlProcess();
            // print_r($url); // Array ( [0] => Home [1] => Sayhi [2] => 1 [3] => 2 [4] => 3 )

            // controller
            if( isset($url[0]) ){
                if( file_exists("./mvc/controllers/".$url[0].".php") ){
                    $this->controller = $url[0];
                    unset($url[0]);             
                }
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            
            // action
            if( isset($url[1]) ){
                if( method_exists($this->controller, $url[1]) ){
                    $this->action = $url[1];
                    unset($url[1]);
                }
            }

            // param
            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->controller, $this->action], $this->params);

        }

        function urlProcess()
        {
            if( isset($_GET["url"]) ){
                return explode("/", filter_var(trim($_GET["url"])));
            }
            
        }
    }
?>