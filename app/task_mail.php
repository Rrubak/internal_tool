<?php
session_start();
	function task_mail(){
		
				$to       = '14cse11@gmail.com';
				$subject  = "Today's Update";
				$msg1 = 'Hi Mam, <br/><blockquote>'. $_SESSION["username"].' has completed today -<b>'. date("Y-m-d").'</b>And they did <ol>';
				$msg_2 = "";
				for ($i=1;($_POST['task'.$i]); $i++) { 
					if(isset($_POST['task'.$i])){
						if($msg_2 == ""){
							$msg_2 = "<li>".$_POST['task'.$i]."</li>";
						}else{
							$msg_2 = $msg_2."<li>".$_POST['task'.$i]."</li>";
						}
					}else{
						$msg = "They Didn't did any tasks";
					}
				}

				$final  = $msg1 . $msg_2."</ol></blockquote> Regards,<br/>Rubak,<br/>Vefetch";
				echo "$final";
				 // phpinfo();

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
