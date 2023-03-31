<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<main>
   <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <a href="/notes" class="text-blue-500 hover:underline"> All Notes</a>
      <p><?= htmlspecialchars($note['body']) ?> </p>

      <div class="mt-6">

         <a href="/note/edit?id=<?= $note["id"] ?>" class="text-gray-500 border border-current px-3 py-1 rounded">Edit</a>
      </div>

      <form action="" method="post" class="mt-6">
         <input type="hidden" name="_method" value="DELETE">
         <input type="hidden" name="id" value="<?= $note["id"] ?>">
         <button type="submit" class="text-sm border border-current rounded px-3 px-1 text-red-500">Delete</button>
      </form> 
     
   </div>
</main>
<?php require base_path("views/partials/foot.php" )?>