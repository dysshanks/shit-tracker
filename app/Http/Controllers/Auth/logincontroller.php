<?php
session_start();
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
    die("Error: Invalid username or password");
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

header("location:$base_url/public/index.php");

exit();
