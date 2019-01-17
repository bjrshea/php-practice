<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Practice</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <h1>
        <?= "Hello, " . htmlspecialchars($_GET['name']); ?>
      </h1>
    </header>
  </body>
</html>
