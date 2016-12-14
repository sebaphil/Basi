<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="container">
        <fieldset id="loginForm">
            <form action="auth.php" method="post">
                <h2 id="title" class="text-center">Login</h2>
                <br>
                <input type="text" name="username" placeholder="Username"  class="center-block text-center">
                <br>
                <input type="password" name="password" placeholder="Password" class="center-block text-center">
                <br>

                <button type="submit" id="loginButton" class="center-block btn btn-primary">
                        Login&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                </button>
                <br>                
                <div class="center-block" id="alreadyLogged">
                    Nuovo utente? <a href="signin.php">Crea un account</a>                    
                </div>
            </form>
        </fieldset>
    </div>
	
</body>
</html>