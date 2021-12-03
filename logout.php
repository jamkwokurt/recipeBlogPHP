<?php
session_start();
unset($_SESSION["username"]);
if(session_destroy()) {
    header("Location: /recipeBlogPHP/index.php");
}
