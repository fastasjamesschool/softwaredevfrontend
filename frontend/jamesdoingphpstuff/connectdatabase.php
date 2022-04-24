<?php
$user = "sqladmin";
$password = "";
$database = "movie";
$port = '8889';
$charset = 'utf8mb4';
$table = "USERS";

try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    echo "Connection works";
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
