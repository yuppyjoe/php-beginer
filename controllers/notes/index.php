<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config['database']);

$heading = "My Notes";

$notes = $db -> query("select * from notes;")->get();


view("notes/index.view.php", [
   "heading" => $heading,
   "notes" => $notes
]);

