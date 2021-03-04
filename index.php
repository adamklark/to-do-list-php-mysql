
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Todo List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      form {
        display: inline-block;
      }
    </style>
  </head>

  <body>
    <main>
      <form action="insertion.php" method="POST">
        <label for="add-task">Nouvelle tâche</label>
        <input id="add-task" required name="todo" />
        <button id="add">Ajouter</button>
        <button id="remove">Effacer</button>
      </form>
      <ul>
        <?php require("./show.php"); ?>
      </ul>
    </main>
  </body>
</html>