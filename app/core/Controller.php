<?php
class Controller {


    public function Response($view,$data = []){
        if(file_exists("../app/views/".$view.".view.php")) {
            require_once "../app/views/" . $view . ".view.php";
        } else {
            echo "Unable to load view";
        }
    }

    public function model($model){
        if (file_exists('..app/models/'.$model.'.php')){
        require_once '..app/models/'.$model.'.php';
        return new $model();
        }else{
            echo "error loading model";
        }

    }
}