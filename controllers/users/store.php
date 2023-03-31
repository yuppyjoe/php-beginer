<?php

// dd($_POST);

use Core\Database;
use Core\Validator;
use Core\App;

$email = $_POST["email"];

$password = $_POST["password"];

//validate

$errors = [];
// dd($errors);

if (!Validator::string($email, 1, 200)) {

   $errors["email"] = "Please enter a valid email address";
}

if (!Validator::string($password, 7, 255)) {

   $errors["password"] = "Please enter a valid password";
}

if (!empty($errors)) {

   return view(
      "users/create.view.php",
      [
         "errors" => $errors
      ]
   );
}


$db = App::resolve(Database::class);

//check account

$user = $db->query(
   "select * from users where email = :email",
   [
      "email" => $email
   ]
)->find();

// dd($result);

// ? redirect login

if ($user) {

   header("location: /");

   exit();
} else {

   // : create
   $db->query(
      "INSERT INTO users(email, password) VALUES(:email, :password)",
      [
         "email" => $email,
         "password" => $password
      ]
   );

   $_SESSION["user"] = [
      "email" => $email
   ];


   header("location: /");

   exit();
}
