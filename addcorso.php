<html>
<?php
$titolo_pagina = "Gli appunti del Dovahkiin";
$titolo_body = "Aggiunta del corso";
require_once "head.php";
if(!(isset($_SESSION['logged']) && $_SESSION['logged'] == true)){
    exit();
}
?>
<body>
    <div id="container">
        <fieldset id="loginForm">
            <form action="add.php" method="post">
                <h2 id="title" class="text-center">Aggiungi un corso</h2>
                <br>
                <input type="text" name="nome" placeholder="Nome del corso"  class="center-block text-center" required>
                <br>
                <input type="text" name="nomedocente" placeholder="Nome del Docente" class="center-block text-center" required>
                <br>
                <input type="text" name="cognomedocente" placeholder="Cognome del Docente" class="center-block text-center" required>
                <br>
                <input type="text" name="annoaccademico" placeholder="Anno accademico" class="center-block text-center" required>
                <br>
                <input type="text" name="corsolaurea" placeholder="Corso di Laurea" class="center-block text-center" required>
                <br>

                <button type="submit" id="signinButton" class="center-block btn btn-success">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Aggiungi
                </button>

            </form>
        </fieldset>
    </div>

</body>
