<html>
	<head>
		<title>
		 	LOG IN
		 </title>
		<link href="css/index_css.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="login">
			<?php 
					error_reporting(0);
					session_start();
	  			function Verify(){
			  		if($_SESSION["verify"]=="verify"){
			  			echo '<a font-size:30px;> wrong password </a>';
			  		} 
		  		}
		  		Verify();
		  		session_unset();
			  	session_destroy();
	  		?>
	  		<h1>Application Login</h1>
	  		<form method="post" action="app/login_validate.php">
		  		<input placeholder="Username" name="username" autofocus required>
		  		<input type="password" name="password" placeholder="Password" required>
		  			<a >Forgot your Password?</a>
		  		<input type="submit" class="btn" name="submit" value="log in">
	  		</form>
		</div>
		
	</body>
</html>