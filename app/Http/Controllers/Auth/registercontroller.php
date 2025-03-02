<?php

global $conn, $base_url;

require_once '../../../../config/conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name == "" || $email == "" || $password == "")
{
    header('location: '.$base_url.'/public/login.php');
    die("Please fill in all the required fields.");
}

$query = "INSERT INTO userinfo (name, email, password) VALUES (':name', ':email', ':password')";
$statement = $conn->prepare($query);
$statement->execute
([
    ':name' => $name,
    ':email' => $email,
    ':password' => $password
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

session_start();
$_SESSION['id'] = $user['id'];
$_SESSION['usr'] = $user['username'];


header("location:$base_url/public/index.php");
exit;
