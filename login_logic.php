<?php
session_start();

if (empty($_POST["username"]) || empty($_POST["password"])){
    header("location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

if ($username = "admin" && $password = "admin") {
   $_SESSION["user"] = $username;
   header("Location: dashboard.php");
} else {
    header("Location: login.php");
}
?>
