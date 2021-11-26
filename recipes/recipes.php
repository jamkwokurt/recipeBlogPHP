<?php
include ('../db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/recipe-page-style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Recipe</title>
</head>
<body>
<!--overwrite body background-->
<style>
    body{
        background:none;
    }
</style>
<div class="flex-container">
    <div class="flex-item-left">
        <p>Recipes Tag</p>
        <div>
            <ul class="list-group" id="recipe tag">
                <?php
                include("../layout/recipeTags.php"); ?>
            </ul>
        </div>
    </div>
    <div class="flex-item-right" id="recipe-content">
        <?php
        $getTag_sql = 'SELECT tag FROM tag';
        $getTag = mysqli_query($con,$getTag_sql);
        while($tag = mysqli_fetch_assoc($getTag) && !empty( mysqli_fetch_assoc($getTag)['tag'].'.php')) {
            include ($tag['tag'].'.php');
        }
        ?>
<!--        <iframe src="single.php" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">-->
<!---->
<!--        </iframe>-->
    </div>
</div>
</body>
</html>