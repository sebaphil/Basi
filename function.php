<?php
//TODO Completare la funzione di login
function checkLogin()
{
    if (true)
        return true;
    else
        return false;
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