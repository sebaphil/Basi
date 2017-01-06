<?php
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

function checkAdmin()
{
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
        if($_SESSION["type"] == '0'){
            //echo "You are logged in as a normal user.";
            return false;
        } else {
            //echo "You are logged in as an admin.";
            return true;
        }
    } else {
        //echo "You are logged in as a guest.";
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