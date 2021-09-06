<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Book</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="navbar">
    <?php include "containingMenu.php"; ?>
  </div>

  <center>

    <?php
    $about = 'About';
    echo "<h1>$about</h1>";
    ?>

  </center>

  <?php
  $launched = 'Released in 10 April 2015 at United Kingdom';
  echo "<p>$launched</p>";
  $author = 'By (author) Elizabeth Rudnick';
  echo "<p>$author</p>";
  $price = 'RM89.50';
  echo "<p>$price</p>";
  ?>

</body>

</html>