<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<main>
   <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <a href="/notes" class="text-blue-500 hover:underline"> All Notes</a>
      <p><?= htmlspecialchars($note['body']) ?> </p>

      <form action="" method="post">
         <input type="hidden" name="_method" value="DELETE">
         <input type="hidden" name="id" value="<?= $note["id"] ?>">
         <button type="submit" class="text-sm text-red-500">Delete</button>
      </form>
   </div>
</main>
<?php require base_path("views/partials/foot.php" )?>