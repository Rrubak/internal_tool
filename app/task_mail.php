<?php
session_start();
	function task_mail(){
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
		
				$to       = '14cse11@gmail.com';
				$subject  = "Today's Update";
				$msg1 = 'Hi Mam, <br/><blockquote>'. $_SESSION["username"].' has completed today -<b>'. date("Y-m-d").'</b>And they did <ol>';
				$msg_2 = "";
				for ($i=1;(bool)($_POST['task'.$i]) ; $i++) { 
					$sql='INSERT INTO task values("'.$_SESSION["username"].'","'.$_POST["task".$i].'","'.date("Y-m-d").'")';
					echo $sql;
					if(isset($_POST['task'.$i])){
						if($msg_2 == ""){
							$msg_2 = "<li>".$_POST['task'.$i]."</li>";
						}else{
							$msg_2 = $msg_2."<li>".$_POST['task'.$i]."</li>";
						}
					}
					$result = $conn->query($sql);
					 print_r($result);	
		}		

				$final  = $msg1 . $msg_2."</ol></blockquote> Regards,<br/>Rubak,<br/>Vefetch";
				echo "$final";
				$headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
	            'MIME-Version: 1.0' . "\r\n" .
	            'Content-type: text/html; charset=utf-8';
				if(mail($to, $subject,$final , $headers))
				    echo "Email sent";
				else
				    echo "Email sending failed";
			}
				
task_mail();
?> 
