<?php
require('../db.php');
include("../auth.php");
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
        <div class="form">
            <p>Dashboard</p>
            <p>This is another secured page.</p>
            <p><a href="/recipeBlogPHP/index.php">Home</a></p>
            <a href="/recipeBlogPHP/logout.php">Logout</a>
        </div>
        <?php
        include("../layout/footer.php")
        ?>
    </div>
</div>
</body>
</html>