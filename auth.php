<?php
    require_once("connessione.php");
    $query = "SELECT * FROM Utenti WHERE Username=".$_POST["username"].";";
    //Eseguire query

    $result = pg_query($query) or die('Query failed: ' . pg_last_error());
    echo "<table>\n";
    while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";



?>