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
        <form action="<?php echo $base_url ?>/app/Http/Controllers/Auth/logincontroller.php" method="post"></form>
    </div>
</main>
<?php
require_once "$base_url/resources/footer.\php";
?>
</body>
</html>
