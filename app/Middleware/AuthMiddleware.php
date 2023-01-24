<?php

namespace programmer\belajar\php\MVC\Middleware;

class AuthMiddleware implements Middleware{
    function before()
    {
        session_start();
        if(!isset($_SESSION['user'])){
            header('Location: /login');
            exit();
        }
    }
}