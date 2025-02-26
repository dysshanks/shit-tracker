<?php
global $base_url;
require_once "../config/config.php";
?>
<!doctype html>
<html lang="en">
<?php
require_once "$base_url/resources/head.php";
?>
<head>
    <title>Home</title>
</head>
<body>
<?php
require_once "$base_url/resources/header.php";
?>
<main>
    <div class="wrapper">
        <form action="<?php echo $base_url ?>/app/Http/Controllers/Auth/logincontroller.php" method="post">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username">
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="login">
            <p>don"t have an account? <a href="<?php echo $base_url ?>/public/regiter.php">Sign up</a></p>
        </form>
    </div>
</main>
<?php
require_once "$base_url/resources/footer.\php";
?>
</body>
</html>
