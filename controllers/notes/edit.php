<?php



use Core\Database;
use Core\App;

$db = App::resolve(\Core\Database::class);

$heading = "Edit Note";

$currentUser = 3;

// dd($note["id"]);
view("notes/edit.view.php", [

   "heading" => $heading,
   "errors" => []

]);
