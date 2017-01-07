<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Aggiunta del corso";
require_once "head.php";
$username = pg_escape_string($_SESSION['username']);
$lezioni = $_GET['lezione'];
$titolo = pg_escape_string($_POST['titolo']);
$testo = pg_escape_string($_POST['testo']);
$query = "INSERT INTO appunti(username, lezioni, titolo, ultimamodifica, testo) VALUES('" . $username . "', '" . $lezioni ."', '" . $titolo. "', current_date , '" . $testo . "');";
$result = pg_query($query);
if (!$result) {
    $errormessage = pg_last_error();
    echo "Error with query: " . $errormessage;
    exit();
}
echo "Appunto aggiunto con successo, verrai reindirizzato alla homepage entro 5 secondi.";
?>
<html>