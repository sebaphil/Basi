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
        $result = $dbconn->prepare($query);
        $result->execute();
        echo "<table class='table-striped table-hover table' align='center'>";
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td><h2><a href='/visualizza.php?appunto=".$row['idappunti']."'>".$row['titolo'].", Autore: ".$row['username']."</a></h2></td>";
        }
        echo "</table>";
    } else {
        echo "<h1>Sei loggato come guest. Esegui il login per effettuare una ricerca.</h1>";
    }
    require_once "foot.php";
?>

</body>
</html>