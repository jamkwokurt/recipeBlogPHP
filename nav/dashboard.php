<?php
require('../db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/centerContentStyle.css"/>
</head>
<body class="center-content">
<div id="page-container">
    <div id="content-wrap">
        <div class="box-account">
        <div class="form">
            <h2>Dashboard</h2>
            <?php
            session_start();
            if(isset($_SESSION['username'])){
                echo "Welcome " . $_SESSION['username']."!";
            }
            ?>
        </div>
        </div>
    </div>
</div>
</body>
</html>