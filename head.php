<?php
require_once "connessione.php";
require_once "function.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titolo_pagina ?></title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<body>
<div id="container">

    <div id="header">
        <?php
        if ($titolo_body != "") {
            echo '<h1>'.$titolo_body.'</h1>';
        }
        ?>
        <div id="navigation">
            <?php
            if (checkLogin() == false) {
                echo '<a href="login.php">Login</a><a href="signin.php">Sign Up</a>';
            }
            ?>
            <div id="tfheader">
                <form id="tfnewsearch" method="get" action="http://www.google.com">
                    <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit"
                                                                                                     value="search"
                                                                                                     class="tfbutton">
                </form>
                <div class="tfclear"></div>
            </div>
        </div><!--#navigation-->

    </div><!--#header-->