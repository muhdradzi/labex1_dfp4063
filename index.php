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
            $nama = 'Beauty and the Beast';
            echo"<h1>$nama</h1>";
            $launched = '10 April 2015';
            echo"<h1>$launched</h1>";
            $Language = 'English';
            echo"<h1>$Language</h1>";
            ?>
        <img src="pic.jpg">
        

  </body>
</html>