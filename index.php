<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Titolo del body";
require_once "head.php";
?>
<body>

    <?php

        $result = pg_query($dbconn, "SELECT * FROM information_schema.TABLES where table_schema = 'information_schema';");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        }

        $arr = pg_fetch_all($result);

        print_r($arr);


    ?>

</body>
<?php
require_once "foot.php";
?>
</html>