<?php

class signup extends Controller{


    public function index(){
      $this->Response('signup/signup');
    }

    public function form(){
        echo "this renders the signup form";
    }
}