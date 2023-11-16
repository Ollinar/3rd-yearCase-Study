<?php

require_once 'middlewares.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes =[
    '/' => 'controllers/index.controller.php',
    '/dashboard' => 'controllers/dashboard.controller.php',
    '/login' => 'controllers/login.controller.php',
    '/register' => 'controllers/register.controller.php',
    '/admin' => 'controllers/admin.controller.php',
    '/login/auth' => 'controllers/login.auth.php',
    '/504' => 'controllers/504.controller.php',
    '/adminDashboard' => 'controllers/adminDashboard.controller.php'
];

    $route = $routes[$url];
    
    $route ? require $route : require $routes['/'];

// class Router{
    
//     public function __construct() {
//         $this->$routes = [];
//         $ih = new RouteHandler('controllers/index.controller.php');
//         $this->addRoute('/',$ih);
//         //
//     }

//     //public static $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    

//     public $routes = [];


//     function addRoute(string $path,RouteHandler $hndlr){
//         $tmp = [$path => $hndlr];
//         debug_zval_dump($this);
//         $this->$routes.array_push($tmp);
//     }


//     public function handleRoute($uri){
//         $rh = $routes[$uri];
//         foreach (rh.$middlewares as $mw){
//             mw.handle();
//         }

//         $route = $routes[$url];
//         $route ? require $route : require $routes['/'];
//     }

// }


// class RouteHandler{
//     public function __construct(public string $controller) {
//         //
//     }
//     public array $middlewares;

//     public function addMiddleware(Middleware $mw){
//         $this->$middlewares.array_push(mw);
//     }

// }

