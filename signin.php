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
            <form action=".php" method="post">
                <h2 id="title" class="text-center">Sign In</h2>
                <br>
                <input type="text" name="username" placeholder="Username"  class="center-block text-center">
                <br>
                <input type="password" name="password" placeholder="Password" class="center-block text-center">
                <br>
                <input type="password" name="verifyPassword" placeholder="Conferma Password" class="center-block text-center">
                <br>
                <input type="text" name="nome" placeholder="Nome" class="center-block text-center">
                <br>
                <input type="text" name="cognome" placeholder="Cognome" class="center-block text-center">
                <br>
                <input type="date" name="annoNascita" class="center-block text-center">
                <br>
                <input type="email" name="email" placeholder="E-Mail" class="center-block text-center">
                <br>

                <div class="center-block" id="alreadyLogged">
                    Already signed? <a href="login.php">Login</a>                    
                </div>
                <br>           
                <a href="signin.php">
                    <button type="button" id="signinButton" class="center-block btn btn-success">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;&nbsp;Sign in
                    </button>
                </a>
            </form>
        </fieldset>
    </div>
	
</body>
</html>