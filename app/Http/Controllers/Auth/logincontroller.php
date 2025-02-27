<?php

global $conn, $base_url;

require_once '../../../../config/conn.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM users WHERE username = ':username'";
$statement = $conn->prepare($query);
$statement->execute
([
    ':username' => $username
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1 or !password_verify($password, $user['password']))
{
    header('location: '.$base_url.'/public/login.php');
    exit("Please fill in all the required fields.");
    die("Error: Invalid username or password");
}

session_start();

$_SESSION['id'] = $user['id'];
$_SESSION['usr'] = $user['username'];

header("location:$base_url/public/index.php");
exit;
