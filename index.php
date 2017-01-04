<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Titolo del body";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
<body>

    <?php

        $result = pg_query($dbconn, "SELECT * FROM corsi;");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }

        $arr = pg_fetch_all($result);
        echo "<table class='table-striped table-hover table' align='center'>";
        while ($row = pg_fetch_row($result)) {
            echo "<tr>";
            echo "<td><h2><a href='/lezioni.php?corso=".$row[0]."'>".$row[1]."</a></h2></td>";
        }
        echo "</table>";

    ?>

</body>
<?php
require_once "foot.php";
?>
</html>