<?php
// return  [
//    "/" => "controllers/index.php",
//    "/about" => "controllers/about.php",
//    "/notes" => "controllers/notes/index.php",
//    "/note" => "controllers/notes/show.php",
//    "/notes/create" => "controllers/notes/create.php",
//    "/contact" => "controllers/contact.php",
//    "/services" => "controllers/services.php",

// ];

$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");
$router->get("/services", "controllers/services.php");


//notes
$router->get("/notes", "controllers/notes/index.php");
$router->get("/note", "controllers/notes/show.php");
$router->delete("/note", "controllers/notes/destroy.php");

$router->get("/note/edit", "controllers/notes/edit.php");
$router->patch("/note", "controllers/notes/update.php");

$router->get("/notes/create", "controllers/notes/create.php");
$router->post("/notes", "controllers/notes/store.php");


//user
$router->get("/register", "controllers/users/create.php");
$router->post("/register", "controllers/users/store.php");