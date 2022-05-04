<?php
require 'scripts/session.php';

if ($logged_in) {
    header('Location: account.php');
    exit;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_email = $_POST['email'];
    $user_passowrd = $_POST['password'];

    if ($user_email == $email and $user_password == $password){
        login();
        header('Location: account.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<h2>Login</h2>
<form method="POST" action="login.php">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Log In">
</form>