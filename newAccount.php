<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Appunti";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
    <body>
        <?php

        $firstname = pg_escape_string($_POST['nome']);
        $surname = pg_escape_string($_POST['cognome']);
        $birth = pg_escape_string($_POST['annoNascita']);
        $utente = pg_escape_string($_POST['username']);
        $upassword = pg_escape_string($_POST['password']);
        $emailaddress = pg_escape_string($_POST['email']);


        $query = "INSERT INTO utenti VALUES('" . $utente . "', '" . $upassword . "', '" . $firstname ."', '" . $surname. "', '" . $birth . "', '" . $emailaddress . "', '0');";
        $result = $dbconn->prepare($query);
        $result->execute();

        echo "Registrazione effettuata con successo, verrai reindirizzato alla homepage entro 5 secondi.";
        ?>
    </body>
<?php
require_once "foot.php";
?>
</html>