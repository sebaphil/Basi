<html>
<meta http-equiv="refresh" content="5;URL=index.php">
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Eliminazione appunto";
require_once "head.php";
if(isset($_GET['id'])){ $column = $_GET['id'];}
$result = pg_query($dbconn, "DELETE FROM appunti WHERE idappunti ='".$column."';");
if (!$result) {
    echo "An error occurred.\n";
    exit;
}
echo "<body><h1>Appunto eliminato con successo!</h1></body>";
?>
<html>