<?php
global $conn;
require_once '../../../../config/conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name == "" || $email == "" || $password == "")
{
    die("Please fill in all the required fields.");
}

$query = "INSERT INTO userinfo (name, email, password) VALUES ('$name', '$email', '$password')";
$statement = $conn->prepare($query);
$statement->execute();

header("location:../../../index.php");
exit();
