<?php
//TODO Completare la funzione di login
function checkLogin()
{
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
        echo "Welcome to the member's area, " . $_SESSION['username'] . "!"."<a href='logout.php'> Logout</a>";
        return true;
    } else {
        //echo "Please log in first to see this page.";
        return false;
    }
}

function logout()
{
    unset($_SESSION["logged"]);
    session_destroy();
    session_start();
}

function logged_needed()
{
    if ($_SESSION['logged'] == false) {
        header('Location: ' . "http://$_SERVER[HTTP_HOST]" . '/index.php');
    }
}