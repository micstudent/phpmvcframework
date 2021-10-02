<?php
/* User:the code holic ..*/

require_once __DIR__.'/vendor/autoload.php';

use App\Core\Application;

$app = new Application();

$app->router->get('/',function(){
    return 'Hello World';
});

$app->router->get('/contact',function(){
    return 'Hello Contact';
});

$app->run();