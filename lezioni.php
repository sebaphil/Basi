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

        $sql = "SELECT * FROM lezioni WHERE lezioni.Corso=:column;";


        echo "<table class='table-striped table-hover table' align='center'>";
        $rows=$dbconn->prepare($sql);
        $rows->bindParam('column',$column);
        $rows->execute();
        while($row=$rows->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td><h2><a href='/appunti.php?lezione=".$row['idlezioni']."'>".$row['data']." Docente: ".$row['docente']."</a></h2></td>";
        }
        echo "</table>";

    ?>
</body>
</html>