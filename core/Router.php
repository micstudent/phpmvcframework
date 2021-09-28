<?php
namespace app\core;
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

     public function __construct(Request $request)
     {  
         $this->request = $request;
     }

     public function get($path,$callback)
     {
        $this->routes['get'][$path] = $callback;var_dump($this->routes['get'][$path]);die();
     }

     public function resolve()
     {
         $this->request->getPath();
     }
 }