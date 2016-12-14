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

                <button type="button" id="loginButton" class="center-block btn btn-primary">
                        Login&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                </button>
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