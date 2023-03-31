<?php

use Core\App;
use Core\Database;

$db = App::resolve(\Core\Database::class);


$heading = "Single Note";

$currentUser = 3;


$note = $db->query(
   "select * from notes where  id = :id",
   ["id" => $_POST["id"]]
)->findOrFail();

authorize($note["users_id"] === $currentUser);

$db->query(
   "delete from notes where id = :id",
   ["id" => $_POST["id"]]
);

header("location: /notes");

exit();
