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
        echo '<pre>';
        var_dump($path);
        echo '</pre>';
        exit;
     }
 }