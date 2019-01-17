<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <ul>
      <?php
        foreach($names as $name) {
          echo "<li>$name</li>";
        }
      ?>
    </ul>
  </body>
</html>
