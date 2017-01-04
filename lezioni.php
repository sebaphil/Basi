<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Lezioni";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
<body>
<?php
        echo $titolo_body;
        if(isset($_GET['corso'])){ $column = $_GET['corso'];}

        $sql = "SELECT * FROM lezioni";
        if(!empty($column)){
            $sql." WHERE lezioni.Corso='".$column."';";
        }


        $result = pg_query($dbconn, $sql);
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }

        $arr = pg_fetch_all($result);
        echo "<table class='table-striped table-hover table' align='center'>";
        while ($row = pg_fetch_row($result)) {
            echo "<tr>";
            echo "<td><h2><a href='/appunti.php?lezione=".$row[0]."'>".$row[1]." Docente: ".$row[3]."</a></h2></td>";
        }
        echo "</table>";

    ?>
</body>
</html>