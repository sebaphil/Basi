<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Titolo del body";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>"
?>
<body>

    <?php

        $result = pg_query($dbconn, "SELECT table_name
                                       FROM information_schema.tables
                                      WHERE table_schema='public'
                                        AND table_type='BASE TABLE'");
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