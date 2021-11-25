<?php
require('../db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Secured Page</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
include("../layout/header.php")
?>
<div id="page-container">
    <div id="content-wrap">
        <div class="box-account">
        <div class="form">
            <p>Dashboard</p>
            <?php
            if(isset($_SESSION['username'])){
                echo "Welcome " . $_SESSION['username']."!";
            }
            ?>
            <br>
            <br>
            <p><a href="/recipeBlogPHP/index.php">Home</a></p>
            <a href="/recipeBlogPHP/logout.php">Logout</a>
        </div>
        </div>
        <?php
        include("../layout/footer.php")
        ?>
    </div>
</div>
</body>
</html>