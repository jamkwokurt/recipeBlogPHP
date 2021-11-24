<div class="header">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href= "/recipeBlogPHP/index.php">jammit</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active" id="btnHome"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Recipes
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="recipe-dropdown">
                        <li id="btnAllRecipes"><a href="recipes/recipes.php">All Recipes</a></li>
                        <li id="btnCake"><a href="#">Cake</a></li>
                        <li id="btnTart"><a href="#">Tart</a></li>
                        <li id="btnPastry"><a href="#">Biscuit</a></li>
                        <li id="btnDessert"><a href="#">Frozen</a></li>
                        <li id="btnDessert"><a href="#">Plated Dessert</a></li>
                        <li id="btnPreserves"><a href="#">Fruit Preserves</a></li>
                        <li id="btnDecoration"><a href="#">Decoration</a></li>
                    </ul>
                </li>
                <li id="btnBookmark"><a href="#">Bookmark</a></li>
                <li id="btnGallery"><a href="#">Gallery</a></li>
                <li id="btnAbout"><a href="#">About</a></li>
            </ul>

            <?php
            if (isset($_SESSION['username'])) {
                echo'<ul class="nav navbar-nav navbar-right">
                        <li id="nav-profile"><a href="/recipeBlogPHP/nav/dashboard.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li id="nav-logout"><a href="/recipeBlogPHP/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>';
            }else {
                echo'<ul class="nav navbar-nav navbar-right">
                        <li id="nav-signup"><a href="/recipeBlogPHP/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li id="nav-login"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>';
            }
            ?>
        </div>
    </nav>
</div>
