<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Risultato della ricerca";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
<body>
<?php
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){

        $campo = pg_escape_string($_POST['campo']);
        $testo = pg_escape_string($_POST['ricerca']);


        $query = "SELECT * FROM appunti WHERE strpos(LOWER(".$campo."), '".strtolower($testo)."')>0;";
        $result = pg_query($query);
        if (!$result) {
            $errormessage = pg_last_error();
            echo "Error with query: " . $errormessage;
            exit();
        }
        $arr = pg_fetch_all($result);
        echo "<table class='table-striped table-hover table' align='center'>";
        while ($row = pg_fetch_row($result)) {
            echo "<tr>";
            echo "<td><h2><a href='/visualizza.php?appunto=".$row[0]."'>".$row[3].", Autore: ".$row[1]."</a></h2></td>";
        }
        echo "</table>";
    } else {
        echo "<h1>Sei loggato come guest. Esegui il login per effettuare una ricerca.</h1>";
    }
?>
</body>
</html>