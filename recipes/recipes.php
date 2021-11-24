<?php
//include auth.php file on all secure pages
include('../auth.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Recipes</title>
    <link rel="stylesheet" href="../css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
    <?php
    include("../layout/header.php")
    ?>
    <div class="form">
        <p>Recipes</p>
        <p>This is another secured page.</p>
        <p><a href="../index.php">Home</a></p>
        <a href="../logout.php">Logout</a>
    </div>
    <?php
    include("../layout/footer.php")
    ?>
    </div>
</div>
</body>
</html>