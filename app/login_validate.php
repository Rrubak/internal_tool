2<html>
<head>
	<title>demo</title>
	
</head>
<body>
	<?php
		function conn(){
			$servername = "localhost";
			$username = "root";
			$password = "palaniM@67";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,"test");

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully ";
			$sql="select username,password from user_password";
			$result = $conn->query($sql);
			print_r($result);
			while($row = $result->fetch_assoc()){
				$final[]=$row;
				if((($_POST["username"])==$row["username"])&&(($_POST["password"])==$row["password"])){
					session_start();
					$_SESSION["username"]=$row["username"];
					// phpinfo();
					// $to       = '14cse11@gmail.com';
					// $subject  = 'user logged in';
					// $message  = $_POST["username"];
					// $headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
		   //          'MIME-Version: 1.0' . "\r\n" .
		   //          'Content-type: text/html; charset=utf-8';
					// if(mail($to, $subject, $message, $headers))
					//     echo "Email sent";
					// else
					//     echo "Email sending failed";
					header("Location: ../view/home.php");
				}
			}
			
		}	
	conn();
	?> 

	
</body>
</html>