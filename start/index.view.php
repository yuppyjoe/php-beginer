<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <div>
      <ul>
         <?php foreach ($filteredBooks as $book) : ?>
            <li>
               <a href="<?= $book["url"] ?>">
                  <?= $book["name"]; ?> (<?= $book["yor"] ?>) - By <?= $book["author"] ?>
               </a>
            </li>
         <?php endforeach; ?>

      </ul>

   </div>
</body>

</html>