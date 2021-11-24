<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
        <?php
        include("layout/header.php")
        ?>
        <div class="container" class="container-fluid">
            <div class="tab-content" id="home-content">
                <embed type="text/html" src="nav/welcome.php">
            </div>
            <div class="tab-content" id="recipe-content">
                <p>recipe</p>
                <embed type="text/html" src="recipes/recipes.php">
            </div>
            <div class="tab-content" id="bookmark-content">
                <p>bookmark</p>
                <embed type="text/html" src="nav/fav.php">
            </div>
            <div class="tab-content" id="gallery-content">
                <p>gallery</p>
                <embed type="text/html" src="nav/gallery.php">
            </div>
            <div class="tab-content" id="about-content">
                <p>about</p>
                <embed type="text/html" src="nav/about.php">
            </div>
        </div>
        <?php
        //if(isset($_SESSION['username'])) {
        //    echo '<p>Welcome</p>
        //    <p>This is dashboard area.</p>
        //    <p><a href="dashboard.php">Dashboard</a></p>
        //    <a href="logout.php">Logout</a>';
        //} else {
        //    echo '<h3 id="login_signup_redirect">Please login or register</h3>';
        //}
        //?>

        <div class="bg-modal">
            <div class="modal-content">
                <div class="close">+</div>
                <img src="img/lemon_icon.png" alt="" width="50px" height="50px">

                <div class="form">
                    <form action="" method="post" name="login">
                        <input type="text" name="username" placeholder="Username" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <br>
                        <input name="submit" type="submit" value="Login" class="btn-submit"
                            <?php
                                include('popupLoginAuth.php');
                            ?>
                        />
                    </form>
                    <br>
                    <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
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