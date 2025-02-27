<?php

session_start();

if (!isset($_SESSION['id']))
{
    $msg = "You are not logged in.";
    header("location:index.php?msg=$msg");
    exit;
}
