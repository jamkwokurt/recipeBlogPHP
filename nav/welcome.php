<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to jammit</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container">
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        echo "Welcome " .$_SESSION['username'];
    }else{
        echo "Welcome to jammit";
    }
    ?>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
    <div id="row-rev" class="content">
        <div style="background-color:coral;">RED</div>
        <div style="background-color:lightblue;">BLUE</div>
        <div style="background-color:lightgreen;">Green div with more content.</div>
    </div>
</div>
</body>
</html>