<?php

namespace Core;


class Router
{

   protected $routes = [];

   public function add($uri, $controller, $method)
   {


      $this->routes[] =
         // compact("method", "uri", "controller");
         [
            "uri" => $uri,
            "controller" => $controller,
            "method" => $method
         ];

      return $this;
   }


   public function get($uri, $controller)
   {
      return $this->routes[] = [
         "uri" => $uri,
         "controller" => $controller,
         "method" => "GET"
      ];
   }


   public function post($uri, $controller)
   {

      return $this->add(
         ["uri" => $uri],
         ["controller" => $controller],
         ["method" => "DELETE"]);
   }


   public function delete($uri, $controller)
   {

      return $this->add(
         ["uri" => $uri],
         ["controller" => $controller],
         ["method" => "DELETE"]);
   }


   public function  put($uri, $controller)
   {

      return   $this->add(
         ["uri" => $uri],
         ["controller" => $controller],
         ["method" => "PUT"]);
   }


   public function patch($uri, $controller)
   {

      return  $this->add(
         ["uri" => $uri],
         ["controller" => $controller],
         ["method" => "PATCH"]);
   }

   public function only($key)
   {

      dd($key);
   }

   public function route($uri, $method)
   {

      foreach ($this->routes as $route) {

         if ($route["uri"] === $uri && $route["method"] === strtoupper($method)) {

            return require base_path($route["controller"]);
         }
      }

      $this->abort();
   }


   

   protected function abort($code = 404)
   {

      http_response_code($code);

      require base_path("views/{$code}.php");

      die();
   }
}


// $routes = require base_path("routes.php");


// function routeToController($uri, $routes)
// {
//    if (array_key_exists($uri, $routes)) {
//       require base_path($routes[$uri]);
//    } else {
//       abort();
//    }
// }





// $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

// routeToController($uri, $routes);
