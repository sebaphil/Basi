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
        echo "<table align='center'>";
        while ($row = pg_fetch_row($result)) {
            echo "<tr>";
            echo "<td><a href='/lezioni.php?corso=".$row[0]."'>".$row[1]."</a></td>";
        }
        echo "</table>";

    ?>

</body>
<?php
require_once "foot.php";
?>
</html>