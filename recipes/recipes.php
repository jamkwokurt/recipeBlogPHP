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
        <h2 id="recipe-index-title">Recipes Tag</h2>
        <div>
            <ul class="list-group" id="recipe tag">
                <?php
                include("../layout/recipeTags.php"); ?>
            </ul>
        </div>
    </div>
    <div class="flex-item-right">
        <?php
        include("../layout/recipeView.php"); ?>
    </div>
</div>
</body>
</html>