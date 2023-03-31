<?php

use Core\Database;
use Core\App;

$db = App::resolve(\Core\Database::class);

$heading = "My Notes";

$notes = $db -> query("select * from notes;")->get();



view("notes/index.view.php", [
   "heading" => $heading,
   "notes" => $notes
]);

