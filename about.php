<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>book</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="synopsis.php">Synopsis</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="chapter.php">Chapter List</a></li>
        </ul>
      </nav>

      <?php
            $about = 'About';
            echo"<h1>$about</h1>";
            $launched = 'Released in 10 April 2015 at United Kingdom';
            echo"<h2>$launched</h2>";
            $author = 'By (author) Elizabeth Rudnick';
            echo"<h2>$author</h2>";
            $price = 'RM89.50';
            echo"<h2>$price</h2>";
            ?>

  </body>
</html>