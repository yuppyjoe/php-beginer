<style>
   body {
      background-color: black;
      color: white;
      display: grid;
      place-items: center;
      height: 100vh;
   }

   a{
      text-decoration: none;
   }
</style>






<?php
$greet = "Hi";
$name = "Joel";
$name = "May";
$book =  "Lost boy";
$read = true;


$books = [
   [
      "name" => "Donuld",
      "author" => "Jerry S",
      "yor" => 2019,
      "url" => "http://url.com"
   ],
   [
      "name" => "Duck Duck ",
      "author" => "Tommy",
      "yor" => 2014,
      "url" => "http://url.com"
   ],
   [
      "name" => "Smitherson",
      "author" => "Tommy",
      "yor" => 2009,
      "url" => "http://url.com"
   ],
   [
      "name" => "Stewie",
      "author" => "Brian G",
      "yor" => 2022,
      "url" => "http://url.com"
   ],

];

function filter ($items, $key, $value){
   $filteredItems = [];
   foreach($items as $item){
      if($item[$key] === $value){
         $filteredItems[] = $item;
      }

   }

   return $filteredItems;
};

$filteredBooks = filter($books, 'author', "Tommy");



?>
<?php
if ($read  && $name == "Joel") {
   echo "$greet .$name . you have read $book";
} else {
   echo "Hey stranger Please read $book";
}
require "index.view.php";
?>
