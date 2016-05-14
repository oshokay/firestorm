<?php


class home  extends Controller {


    public function index(){
       $this->Response('home/home');
    }

    public function contact(){

        echo "this renders the contact view";
    }
}