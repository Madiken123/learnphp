<?php


if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$vars){
echo '<pre>';
var_dump($_vars);
echo '</pre>';
}


spl_autoload_register(function($class){
    $class = substr($class,4);
 require_once "sc/$class.php";
});

use App\Router;

Router::addRoute('/', function(){
    $posts=[
        ['title' => 'some  1', 'body' => 'some body 1'],
        ['title' => 'some  4', 'body' => 'some body 4'], 
        ['title' => 'some  2', 'body' => 'some body 2'],
    ];
        include 'views/index.php';
});

Router::addRoute('/us', function(){
    $posts=[
        ['title' => 'some  1', 'body' => 'some body 1'],
        ['title' => 'some  4', 'body' => 'some body 4'], 
        ['title' => 'some  2', 'body' => 'some body 2'],
    ];
        include 'views/us.php';
});

Router::addRoute('/tech', function(){
    $posts=[
        ['title' => 'some tech  1', 'body' => 'some body 1'],
        ['title' => 'some  4', 'body' => 'some body 4'], 
        ['title' => 'some  2', 'body' => 'some body 2'],
    ];
        include 'views/tech.php';
});
$router = new Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if ($match){
    call_user_func($match['action']);
} else {
    echo 'ERROR 404';

}
