<?php include 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

  <title>Document</title>
</head>
<body>

  <div class="container">
    <div class="col-xs-6">
      <form class="" action="demo.php" method="post">
        <input type="text" name="Username" value="" placeholder="Username">
        <br>
        <input type="password" name="Password" value="" placeholder="Password">
        <br>
        <select class="id" name="">
          <?php
          showAll();
           ?>
        </select>
        <input type="submit" name="Submit" value="Submit">
      </form>

    </div>

  </div>

</body>
</html>
