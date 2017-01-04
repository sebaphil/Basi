<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Titolo del body";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
<body>
<?php
        if(isset($_GET['corso'])){ $column = $_GET['corso'];}

        $sql = "SELECT * FROM lezioni INNER JOIN corsi on lezioni.Corso=corsi.Codice WHERE lezioni.Corso=";
        if(!empty($column)){
            $sql."'".$column."';";
        }


        $result = pg_query($dbconn, $sql);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }

        $arr = pg_fetch_all($result);
        echo "<table align='center'>";
        while ($row = pg_fetch_row($result)) {
            echo "<tr>";
            echo "<td><a href='/appunti.php?lezione=".$row[0]."'>".$row[1]." Docente: ".$row[3]."</a></td>";
        }
        echo "</table>";

    ?>
</body>
</html>