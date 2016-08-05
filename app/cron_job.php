<?php 

	include_once '../db/db_functions.php';
	$conn = db_connect();
	$sql = "SELECT * FROM `tasks` WHERE `date` ='".date("Y-m-d")."'";
	$result = execute_query($sql, $conn);
	while ($row = $result->fetch_assoc()) {
		$final[] = $row;
	}
	$tasks = "";
	foreach ($final as $dummy_id => $task_details) {
		$tasks = $tasks.$task_details['tasks_completed'].'<br/>';
	}
	$message_content = "<blockquote>Hi Mam, <br/><blockquote>Today ".date("Y-m-d")." the students have completed the following tasks<blockquote>".$tasks."</blockquote></blockquote>Thanks,<br/>Rubak</blockquote>";
	echo "$message_content";
	mail_to_mam($message_content);


	function mail_to_mam($message_content){
		$to       = 'asudhakargeek@gmail.com';
		$subject  = "Today's Update ".date("Y-m-d")."- Reg";
		$headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
	            'MIME-Version: 1.0' . "\r\n" .
	            'Content-type: text/html; charset=utf-8';
		if(mail($to, $subject, $message_content, $headers))
		    echo "Email sent";
		else
		    echo "Email sending failed";
	}
	


