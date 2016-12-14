<?php
$titolo_pagina = "Login";
$titolo_body = "";
require_once 'head.php';
?>
        <fieldset id="loginForm">
            <form action="auth.php" method="post">
                <h2 id="title" class="text-center">Login</h2>
                <br>
                <input type="text" name="username" placeholder="Username"  class="center-block text-center" 
                <?php
                if(isset($_GET['user']))
                    echo "value='".$_GET['user']."'"; 
                ?>
                >
                <br>
                <input type="password" name="password" placeholder="Password" class="center-block text-center">
                <br>

                <button type="submit" id="loginButton" class="center-block btn btn-primary">
                        Accedi&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                </button>
                <br>                
                <div class="center-block" id="alreadyLogged">
                    Nuovo utente? <a href="signin.php">Crea un account</a>                    
                </div>
                <br>
                <?php 
                if(isset($_GET["e"])){
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Username o password errati</div>";
                }
                ?>
            </form>
        </fieldset>
<?php
require_once 'foot.php';
?>