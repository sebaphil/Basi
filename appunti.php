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
        if(isset($_GET['corso'])){ $column = $_GET['corso'];}
        $sql = "SELECT * FROM appunti";
        if(!empty($column)){
            $sql." WHERE appunti.Lezioni='".$column."';";
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
            echo "<td><a href='/visualizza.php?appunto=".$row[0]."'>".$row[3].", Autore: ".$row[1]."</a></td>";
        }
        echo "</table>";

    ?>
</body>
</html>