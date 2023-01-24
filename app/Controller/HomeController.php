<?php

namespace programmer\belajar\php\MVC\Controller;

use programmer\belajar\php\MVC\App\View;

class HomeController{
    function index(){
        $model = [
            'title' => 'titi',
            'content' => 'Welcome to the black land'
        ];
        View::render('Home/index', $model);
        // echo "HomeController.index()";
    }
    function hello(){
        echo "HomeController.hello()";
    }
    function hai(){
        echo "HomeController.hai()";
    }
    function login(){
        $req = [
            'username' => $_POST['username'],
            'password' => $_POST['password']
        ];

        $user = [];

        $response = [
            "message" => "Login berhasil!"
        ];
    }
}