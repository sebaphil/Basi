<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="container">
        <fieldset id="loginForm">
            <form action="newAccount.php" method="post">
                <h2 id="title" class="text-center">Crea un nuovo account</h2>
                <br>
                <input type="text" name="username" placeholder="Username"  class="center-block text-center" required>
                <br>
                <input type="password" name="password" placeholder="Password" class="center-block text-center" required>
                <br>
                <input type="text" name="nome" placeholder="Nome" class="center-block text-center" required>
                <br>
                <input type="text" name="cognome" placeholder="Cognome" class="center-block text-center" required>
                <br>
                <input type="date" name="annoNascita" class="center-block text-center" required>
                <br>
                <input type="email" name="email" placeholder="E-Mail" class="center-block text-center" required>
                <br>

                <div class="center-block" id="alreadyLogged">
                    Sei gi&agrave; registrato? <a href="login.php">Loggati</a>                    
                </div>
                <br>           
                <button type="submit" id="signinButton" class="center-block btn btn-success">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;Registrati
                </button>
                
            </form>
        </fieldset>
    </div>
	
</body>
</html>