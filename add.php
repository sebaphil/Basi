<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Aggiunta del corso";
require_once "head.php";
$nome = pg_escape_string($_POST['nome']);
$nomedocente = pg_escape_string($_POST['nomedocente']);
$cognomedocente = pg_escape_string($_POST['cognomedocente']);
$annoaccademico = pg_escape_string($_POST['annoaccademico']);
$corsolaurea = pg_escape_string($_POST['corsolaurea']);
$query = "INSERT INTO corsi(Nome, NomeDocente, CognomeDocente, AnnoAccademico, CorsoLaurea) VALUES('" . $nome . "', '" . $nomedocente ."', '" . $cognomedocente. "', '" . $annoaccademico . "', '" . $corsolaurea . "');";
$result = pg_query($query);
if (!$result) {
    $errormessage = pg_last_error();
    echo "Error with query: " . $errormessage;
    exit();
}
echo "Corso aggiunto con successo, verrai reindirizzato alla homepage entro 5 secondi.";
?>
<html>