<?php

namespace programmer\belajar\php\MVC\App;

class View{
    public static function render($view, $model){
        require __DIR__ . '/../view/' . $view . '.php';
    }
}