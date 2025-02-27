<?php

global $base_url;
require_once "../config/config.php";
?>
<!doctype html>
<html lang="en">
<?php
require_once "$base_url/recources/views/components/head.php";
?>
<head>
    <title>Home</title>
    <script src="<?php echo $base_url?>/recources/js/loginSwitch.ts"></script>
</head>
<body>
<?php
require_once "$base_url/recources/views/components/header.php";
?>
<main>
    <div class="login">
        <form action="<?php echo $base_url ?>/app/Http/Controllers/Auth/logincontroller.php" method="post">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username">
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="login">
            <p>don't have an account? <a id="showRegister" href="#">Sign up</a></p>
        </form>
        <form action="<?php echo $base_url ?>/app/Http/Controllers/Auth/registercontroller.php" method="post" style="display: none;">
            <label for="name">username</label>
            <input type="text" id="name" name="name" placeholder="username">
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="email">
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="password">
            <input type="submit" value="regiter">
            <p>already have an account? <a id="showLogin" href="#">Login</a></p>
        </form>
    </div>
</main>
<?php
require_once "$base_url/recources/views/components/footer.php";
?>
</body>
</html>
