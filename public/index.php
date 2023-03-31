<?php

session_start();

const BASE_PATH = __DIR__ . "/../";


require BASE_PATH . "Core/functions.php";

spl_autoload_register(function ($class) {


   $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

   require base_path("{$class}.php");
});
// require base_path("Database.php");
// require base_path("Response.php");

require base_path("bootstrap.php");


// require base_path("Core/router.php");
$router = new \Core\Router();

$routes= require base_path("routes.php");

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];
// dd($uri);

$router->route($uri, $method);

// routeToController($uri, $routes);


// connect database



// $id = ($_GET["id"]);

// $query = "select * from posts where id = ?";

// $posts = $db->query($query, [$id])->fetch();
