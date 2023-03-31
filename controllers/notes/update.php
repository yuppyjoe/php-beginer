<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db = App::resolve(\Core\Database::class);

$heading = "Single Note";

$currentUser = 3;

// dd("am here");

//find note
$note = $db->query(

   "select * from notes where  id = :id",
   ["id" => $_POST["id"]]
)->findOrFail();

dd($note);

//authorize
authorize($note["users_id"] === $currentUser);

//validate form
$errors = [];

if (! Validator::string($_POST["body"], 1, 1000)) {

   $errors["body"] = "A body is of no more than 1000 characters is required";
}

//validation issues
if (count($errors)) {

   return view("notes/edit.view.php", [

      "heading" => $heading,
      "errors" => $errors,
      "note" => $note,

   ]);
}


$db->query(

   "UPDATE notes set body = :body where id =:id",
   [
      "id" => $_POST["id"],
      "body" => $_POST["body"],
   ]

);

header("location: /notes");
die();