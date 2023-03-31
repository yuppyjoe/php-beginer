<?php

use Core\Validator;
use Core\Database;
use Core\App;


$validator = new Validator();


$db = App::resolve(\Core\Database::class);
$errors = [];

if (!Validator::string($_POST["body"], 1, 1000)) {

   $errors["body"] = "A body is of no more than 1000 characters is required";
}





if (!empty($errors)) {

   //validation issues
   return view("notes/create.view.php", [

      "heading" => $heading,
      "errors" => $errors

   ]);
}


$note = $db->query(

   "INSERT INTO notes(body, users_id) VALUES(:body, :users_id)",
   [
      "body" => $_POST["body"],
      "users_id" => $_POST["users_id"]
   ]

);

header("location: /notes");
die();
