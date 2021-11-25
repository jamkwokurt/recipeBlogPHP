<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to jammit</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Welcome " .$_SESSION['username'];
    }
    ?>
</div>
</body>
</html>