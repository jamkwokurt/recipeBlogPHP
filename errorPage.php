<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Failed login</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
        <?php
        require('db.php');
        include("layout/header.php");
        ?>
        <div class="box-account">
        <div class="form" class="error-page">
            <div id="error-msg">
                <h3>Username/password is incorrect.</h3>
                <br/>Click here to <a href='login.php'>Login</a>
            </div>
        </div>
        </div>
        <?php
        include("layout/footer.php")
        ?>
    </div>
</div>
</body>
</html>