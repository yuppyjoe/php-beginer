<?php

use Core\Database;
use Core\Validator;


require base_path("Core/Validator.php");

$config = require base_path("config.php");
$db = new Database($config['database']);


$heading = "Create a new Note";


$errors = [];


if ($_SERVER["REQUEST_METHOD"] === "POST") {


   $validator = new Validator();

   if (!Validator::string($_POST["body"], 1, 1000)) {

      $errors["body"] = "A body is of no more than 1000 characters is required";
   }





   if (empty($errors)) {

      $note = $db->query(

         "INSERT INTO notes(body, users_id) VALUES(:body, :users_id)",
         [
            "body" => $_POST["body"],
            "users_id" => $_POST["users_id"]
         ]

      );
   }
}



view("notes/create.view.php", [

   "heading" => $heading,
   "errors" => $errors

]);
