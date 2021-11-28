<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to jammit</title>
    <link rel="stylesheet" href="../css/textAnimation.css"/>
</head>
<body>
<div class="container">
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo '<h1 class="ani">Welcome ' .$_SESSION['username'] . '</h1>';
    }else{
        echo '<h1 class="ani">Welcome to jammit<h1>';
    }
    ?>
</div>
<script src="../script/textAnimationController.js"></script>
</body>
</html>