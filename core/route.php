<?php

 class route {


    protected $Controller;
    protected $Action;

    function __construct()
    {
        $url = $this->parseUrl();
        $this->controller($url);

        //calling the controller


    }

     function controller($url){

        if(file_exists('./app/Controller/'.$url[0].'.php')){
             $this->Controller = $url[0];
            require_once ('./app/Controller/'.$url[0].'.php');
             $this->Controller = new $this->Controller;
             unset($url[0]);
         } else {
            echo 'ERROR : FILE NOT FOUND';
        }

     }


     function action($Controller){
         if(method_exists($Controller, $this->Action)){

         }

     }

     function parseUrl(){
         $url = $_GET['url'];
         if(isset($url)){
             $urlArray = explode('/', $url);
         }
         return $urlArray;
     }



}
