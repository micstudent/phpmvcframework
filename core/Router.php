<?php
namespace App\Core;
/**
 * Class Application
 *
 * @author Marip Nyau Brang Seng <novemberjob007@gmail.com> 
 * @package app\core
 */
 

 class Router
 {
     public Request $request;
     protected array $routes = [];  
          
     public function __construct(Request $req)
     {  
         $this->request = $req;
     }

     public function get($path,$callback)
     {
        $this->routes['get'][$path] = $callback;
     }

     public function resolve()
     {
        $path = $this->request->getPath();   
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if($callback===false)
        {
            return "not found";
        }
        if(is_string($callback))
        {
            return $this->renderView($callback);var_dump($callback);die();
        }
        return call_user_func($callback);
        
     }
     
     public function renderView($view)
    {
        include_once __DIR__.'/../views/'.'contact'.'.php';
    }
 }