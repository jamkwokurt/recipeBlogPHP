<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="main-container">
<div id="page-container">
    <div id="content-wrap">
        <?php
        include("layout/header.php")
        ?>
        <div class="container" class="container-fluid">
            <div class="tab-content" id="home-content">
                <embed type="text/html" src="nav/welcome.php">
            </div>
            <div style="width: 100%; height:400px; overflow: hidden" class="tab-content" id="recipe-content">
                <p>recipe</p>
                <embed style="width:100%; height: 100%; overflow: hidden" id="recipe-contents" type="text/html" src="recipes/recipes.php">
            </div>
            <div class="tab-content" id="bookmark-content">
                <embed type="text/html" src="nav/fav.php">
            </div>
            <div class="tab-content" id="gallery-content">
                <embed type="text/html" src="nav/gallery.php">
            </div>
            <div class="tab-content" id="about-content">
                <embed type="text/html" src="nav/about.php">
            </div>
        </div>

        <div class="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <img src="img/lemon_icon.png" alt="" width="50px" height="50px">

                <div class="form">
                    <form action="popupLoginAuth.php" method="post" name="login">
                        <input type="text" name="username" placeholder="Username" required />
                        <br>
                        <input type="password" name="password" placeholder="Password" required />
                        <br>
                        <input name="submit" type="submit" value="Login" class="btn-submit"/>
                    </form>
                    <br>
                    <p id="text-change-area">Not registered yet? <a href='registration.php'>Register Here</a></p>


                </div>
            </div>
        </div>

    <script src="script/tabController.js"></script>
    <script src="script/popupController.js"></script>

    </div>
<?php
include("layout/footer.php")
?>
</div>
</body>
</html>