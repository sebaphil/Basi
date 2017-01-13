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
        if(isset($_GET['lezione'])){ $column = $_GET['lezione'];}
        $sql = "SELECT * FROM appunti WHERE appunti.Lezioni='".$column."';";

        echo "<table class='table-striped table-hover table' align='center'>";
        $rows=$dbconn->prepare($sql);
        $rows->execute();
        while($row=$rows->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td><h2><a href='/visualizza.php?appunto=".$row['idappunti']."'>".$row['titolo'].", Autore: ".$row['username']."</a></h2></td>";
            if(isset($_SESSION['username']) && ($_SESSION['username']==$row['username'] || checkAdmin())){
                echo "<td><h2><a href='deleteappunto.php?id=".$row['idappunti']."'>Elimina</a></h2></td>";
            }
        }
        echo "</table>";
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            echo "<h3><a href='addappunto.php?lezione=".$column."'>Aggiungi</a></h3>";
        }

    ?>
</body>
</html>