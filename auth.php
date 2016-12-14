<?php
    require_once("connessione.php");
    $query = "SELECT * FROM Utenti WHERE Username=".$_POST["username"].";";
    //Eseguire query

    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
    $user = pg_fetch_array($result, null, PGSQL_ASSOC);
    if($_POST["password"] === $user["password"]){
        session_start();
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["logTime"] = time();
        header("location index.php");
    }
    else{
        header("location login.php?e=1&user=".$_POST["username"]);
    }


?>