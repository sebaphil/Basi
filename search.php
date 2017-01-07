<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Gli appunti del Dovahkiin";
require_once "head.php";
echo "<title>".$titolo_pagina."</title>";

?>
<body>
    <div id="container">
        <form action="result.php" method="post">
        <h3>Effettua la ricerca per
            <select name="campo">
              <option value="username">username</option>
              <option value="titolo">titolo</option>
              <option value="testo">contenuto</option>
            </select>
            <br>
            <input type="text" name="ricerca" placeholder=""  class="center-block text-center" required>
            <br>
            <button type="submit" id="signinButton" class="center-block btn btn-success">
                Ricerca
            </button>
        </h3>
        </form>
    </div>

</body>
</html>