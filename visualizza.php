<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Appunti";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
<body>
<?php
        echo $titolo_body;
        if(isset($_GET['appunto'])){ $column = $_GET['appunto'];}
        $sql = "SELECT * FROM appunti WHERE appunti.IdAppunti='".$column."';";

        $result = pg_query($dbconn, $sql);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }

        $row = pg_fetch_row($result);
        $sql_autore = "SELECT Nome, Cognome FROM utenti WHERE Username='".$row[1]."';";
        $res_autore = pg_query($dbconn, $sql_autore);
        $row_autore = pg_fetch_row($res_autore);


        echo "<h2>";
            echo "<br>";
            echo "Autore: ".$row_autore[0]." ".$row_autore[1];
            echo "<br>";
            echo "Data: ".$row[4];
            echo "<br>";
            echo "<textarea readonly>".$row[5]."</textarea>";

        echo "</h2>";



    ?>
</body>
</html>