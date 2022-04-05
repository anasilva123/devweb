<?php

// Sample file: Never send your credentials to git

// host
$host = 'http://localhost/';

// db
$db_name = 'db_teste';
$db_host = 'localhost';
$db_user = 'usuarioteste1';
$db_pass = 'admin';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
?>
