<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Gli appunti del Dovahkiin";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>";
?>
<body>

    <?php


        echo "<table class='table-striped table-hover table' align='center'>";

        $rows = $dbconn->prepare("SELECT * FROM corsi");
        $rows->execute();
        while($row = $rows->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td><h2><a href='/lezioni.php?corso=".$row['codice']."'>".$row['nome']."</a></h2></td>";
            if(checkAdmin()){
                echo "<td><h2><a href='deletecorso.php?id=".$row['codice']."'>Elimina</a></h2></td>";
            }
        }
        echo "</table>";
        echo "<br>";
        if(checkAdmin()){
            echo "<h3><a href='addcorso.php'>Aggiungi corso</a></h3>";
        }


    ?>

</body>
<?php
require_once "foot.php";
?>
</html>