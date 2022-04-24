<?php
$user = "sqladmin";
$password = "";
$database = "movie";
$port = '8889';
$charset = 'utf8mb4';

try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    echo "Connection works";
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
  }
