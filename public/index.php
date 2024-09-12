<?php


if (preg_match('/\.(?:png|jpg|jpeg|gif|svg|js|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$vars){
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
}


spl_autoload_register(function($class){
    $class = substr($class,4);
 dump($class);
 require_once "sc/$class.php";
});

// require_once 'src/router2.php';
// require_once 'src/DB.php.php';


$router = new App\router();
$db = new App\DB();
$Controller = new App\Controllers\PublicController();
dump($router, $db, $Controller);

// switch($_SERVER['REQUEST_URI']){
//     case '/':
//         $posts = [
//             ['title' => 'some  1', 'body' => 'some body 1'],
//             ['title' => 'some  2', 'body' => 'some body 2'],
//             ['title' => 'some  3', 'body' => 'some body 3'],
//             ['title' => 'some  4', 'body' => 'some body 4'],   
//         ];
//         include 'views/index.php';
//         break;
//         case '/us':
//             $posts = [
//                 ['title' => 'some us 1', 'body' => 'some body 1'],
//                 ['title' => 'some US 2', 'body' => 'some body 2'],
//                 ['title' => 'some US 3', 'body' => 'some body 3'],
//                 ['title' => 'some US 4', 'body' => 'some body 4'],   
//             ];
//         include 'views/us.php';
//         break;
//         case '/tech':
//             $posts = [
//                 ['title' => 'some tech 1', 'body' => 'some body 1'],
//                 ['title' => 'some tech 2', 'body' => 'some body 2'],
//                 ['title' => 'some tech 3', 'body' => 'some body 3'],
//                 ['title' => 'some vtech 4', 'body' => 'some body 4'],   
//             ];
//         include 'views/tech.php';
//         break;
//         default:
//         echo 'ERROR 404';
// }
