<?php
namespace App\Core;
/**
 * Class Application
 *
 * @author Marip Nyau Brang Seng <novemberjob007@gmail.com> 
 * @package app\core
 */


 class Application
 {
    public Request $request;
    public Router $router;

     public function __construct()
     {
         $this->request = new Request(); 
         $this->router = new Router($this->request);          
     }

     public function run()
     {
         $this->router->resolve();
        
     }
    
 }