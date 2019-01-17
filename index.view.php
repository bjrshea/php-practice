<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <ul>
      <li>
        <strong>Name: </strong> <?= $task['title']; ?>
      </li>
      <li>
        <strong>Due Date: </strong> <?= $task['due']; ?>
      </li>
      <li>
        <strong>Assigned To: </strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
        <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
      </li>
    </ul>
  </body>
</html>
