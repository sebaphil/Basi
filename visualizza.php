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

        $result = $dbconn->prepare($sql);
        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);

        $sql_autore = "SELECT Nome, Cognome FROM utenti WHERE Username=:rowusername;";
        $res_autore = $dbconn->prepare($sql_autore);
        $res_autore->bindParam(':rowusername', $row['username']);
        $res_autore->execute();
        $row_autore = $res_autore->fetch(PDO::FETCH_ASSOC);


        echo "<h2>";
            echo "<br>";
            echo "Autore: ".$row_autore['nome']." ".$row_autore['cognome'];
            echo "<br>";
            echo "Data: ".$row['ultimamodifica'];
            echo "<br>";
            echo "<textarea readonly>".$row['testo']."</textarea>";

        echo "</h2>";



    ?>
</body>
</html>