
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
      <form method="POST">
        <label for="add-task">Nouvelle tâche</label>
        <input id="add-task" name="todo" />
        <button>Ajouter</button>
      </form>
      <ul>
        <?php require("./insertion.php"); ?>
      </ul>
    </main>
  </body>
</html>