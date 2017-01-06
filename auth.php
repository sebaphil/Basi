<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<body>
<?php
    $titolo_body = "Autenticazione";
    require_once "head.php";
    $query = "SELECT * FROM utenti WHERE username='".$_POST["username"]."';";
    //Eseguire query

    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
    $user = pg_fetch_array($result, null, PGSQL_ASSOC);
    if($_POST["password"] === $user["password"]){
        //session_start();
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["logTime"] = time();
        $_SESSION["type"] = $user["tipo"];
        header("location index.php");
        echo "<h1>Autenticazione eseguita con successo! Verrai reindirizzato alla homepage in 5 secondi.</h1>";
        $_SESSION["logged"]=true;
    }
    else{
        header("location login.php?e=1&user=".$_POST["username"]);
        echo "<h1>Username o password errati.</h1>";
    }


?>
</body>
</html>