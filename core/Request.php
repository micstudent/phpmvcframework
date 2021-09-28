<?php
namespace app\core;

class Request
{
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ;var_dump($path);die();
        $position = strpos($path,'?');
         echo '<pre>';
         var_dump($position);
         echo '</pre>';
         exit;
    }

    public function getMethod()
    {

    }
}
