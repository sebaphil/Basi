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
            <?php
                if(isset($_GET['lezione'])){ $column = $_GET['lezione'];}
                echo "<form action='adda.php?lezione=".$column."' method='post'>";
            ?>
                <h2 id="title" class="text-center">Aggiungi un corso</h2>
                <br>
                <input type="text" name="titolo" placeholder="Titolo" class="center-block text-center" required>
                <br>
                <input type="textarea" name="testo" class="center-block text-center" required>
                <br>

                <button type="submit" id="signinButton" class="center-block btn btn-success">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Aggiungi
                </button>

            </form>
        </fieldset>
    </div>
</body>