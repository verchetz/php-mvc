<?php

namespace programmer\belajar\php\MVC\App;

class Router{

    private static $routes = [];

    public static function add(string $method, string $path, 
                               string $controller, string $function,
                               array $middlewares = []){
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middlewares' => $middlewares
        ];
    }

    public static function run(){
        $path = '/';
        if(isset($_SERVER['PATH_INFO'])) $path = $_SERVER['PATH_INFO'];
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route){
            $pattern = "#^" . $route['path'] . "$#";
            if(preg_match($pattern, $path, $matches) && $route['method'] == $method){
                // echo "Controller: " . $route['controller'] . ', function: ' . $route['function'];
                
                    foreach ($route['middlewares'] as $midware){
                        $instance = new $midware;
                        $instance->before();
                    }

                    $controller = new $route['controller'];
                    $function = $route['function'];
                    // $controller->$function();

                    array_shift($matches);
                    call_user_func_array([$controller, $function], $matches);
                    return;
                
            }
        }

        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }
}