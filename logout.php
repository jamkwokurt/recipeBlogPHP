<?php
include ("layout/path.php");
session_start();
// Destroying All Sessions
if(session_destroy()) {
// Redirecting To Home Page
    header("Location: /recipeBlogPHP/index.php");
}
