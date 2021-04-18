<?php

// if (isset($_POST['Submit'])) {

$connection = mysqli_connect('localhost', 'root','', 'demo');

if(!$connection)
 {
  die("Database Connection Failed");
}
// }
