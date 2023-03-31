<?php

use Core\Database;
use Core\App;

$db = App::resolve(\Core\Database::class);

$heading = "Single Note";

$currentUser = 3;




$note = $db->query(
   "select * from notes where  id = :id",
   ["id" => $_GET["id"]]
)->findOrFail();

authorize($note["users_id"] === $currentUser);

view("notes/show.view.php", [
   "heading" => $heading,
   "note" => $note
]);
