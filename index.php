<?php
$titolo_pagina = "Titolo pagina";
require_once "head.php";

</head>
<body>
	<div id="container">
	 
	    <div id="header">
	    	<h1>Appunti universitari</h1>
	        <div id="navigation">
	        	<a href="">Login</a>
	        	<a href="">Sign Up</a>
	        	<div id="tfheader">
					<form id="tfnewsearch" method="get" action="http://www.google.com">
				    	<input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
					</form>
					<div class="tfclear"></div>
				</div>
	        </div><!--#navigation-->

	    </div><!--#header-->

	        <div id="main">
	        	<!--#percorso-->
	        	<div id="path">Qui va inserito il percorso</div>
	        	<div id="mainbody">Questo è il body</div>
	        </div><!--#main-->
	     
	    <div id="footer">
	    	
	    </div><!--#footer-->
	 
	</div><!--#container-->
</body>
</html>