<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);

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
