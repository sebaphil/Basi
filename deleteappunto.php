<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Eliminazione appunto";
require_once "head.php";
if(isset($_GET['id'])){ $column = $_GET['id'];}
$sql = "DELETE FROM appunti WHERE idappunti ='".$column."';";
$result = $dbconn->prepare($sql);
$result->execute();

echo "<body><h1>Appunto eliminato con successo!</h1></body>";
?>
<html>