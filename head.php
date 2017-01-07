<?php
require_once "connessione.php";
require_once "function.php";
session_start();
checkAdmin();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div id="container">

    <div id="header">
        <?php
        if ($titolo_body != "") {
            echo '<h1 align="center">'.$titolo_body.'</h1>';
        }
        ?>
        <div id="navigation">
            <?php
            if (checkLogin() == false) {
                echo '<a href="login.php">Login</a> or <a href="signin.php">Sign Up</a>';
            }
            ?>
            <div id="tfheader">
                <h5 align="right"><a href="search.php">Effettua una ricerca</a></h5>
                <div class="tfclear"></div>
            </div>
        </div><!--#navigation-->

    </div><!--#header-->