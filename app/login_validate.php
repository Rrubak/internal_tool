2<html>
<head>
	<title>demo</title>
	
</head>
<body>
	<?php
		function conn(){
			$servername = "localhost";
			$username = "root";
			$password = "";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,"test");

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully   "; 
			session_start();
			$i=0;
			$sql="select username,password from user_password";
			$result = $conn->query($sql);
			print_r($result);
			while($row = $result->fetch_assoc()){
				$final[]=$row;
				print_r($row['username']);
				if((($_POST["username"])==$row["username"])&&(($_POST["password"])==$row["password"])){
					$_SESSION["username"]=$row["username"];
					print_r($row['username']);
					header("Location: ../view/home.php");
				}
				elseif(($_POST["username"])!=$row["username"]) {
					print_r('wrong password');
					$_SESSION["verify"]="verify";
					echo '<script type="text/javascript">window.location.href=" ../index.php";</script>';
				}
			}
		}	
		conn();
	?> 

	
</body>
</html>