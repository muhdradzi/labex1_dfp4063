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
    $nama = 'Beauty and the Beast';
    echo "<h1>$nama</h1>";
    ?>

  </center>

  <?php
  $launched = '10 April 2015';
  echo "<p>$launched</p>";
  $Language = 'English';
  echo "<p>$Language</p>";
  ?>
  <img src="pic.jpg">

</body>

</html>