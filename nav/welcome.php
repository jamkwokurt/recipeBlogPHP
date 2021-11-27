<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to jammit</title>
</head>
<body>
<div class="container">
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Welcome " .$_SESSION['username'];
    }else{
        echo "Welcome to jammit" ;
    }
    ?>
</div>
</body>
</html>