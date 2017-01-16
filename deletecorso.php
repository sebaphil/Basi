<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Eliminazione corso";
require_once "head.php";
if(isset($_GET['id'])){ $column = $_GET['id'];}
$sql= "DELETE FROM corsi WHERE codice =:column;";
$result = $dbconn->prepare($sql);
$result->bindParam(':column', $column);
$result->execute();

echo "<body><h1>Corso eliminato con successo!</h1></body>";
?>
<html>