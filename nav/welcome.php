<?php
//include auth.php file on all secure pages
include('../auth.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to jammit</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
if(isset($_SESSION['username'])){
    echo "Welcome " .$_SESSION['username'];
}
?>

<h1>WELCOME HOME</h1>
<div class="container">

</div>
</body>
</html>