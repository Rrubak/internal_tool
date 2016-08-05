<?php
	include_once '../db/db_functions.php';
	session_start();
	task_mail();


	//functions
	function task_mail(){
		$conn = db_connect();
		$msg1 = $_SESSION["username"].' has completed the following tasks <ol>';
		$msg_2 = "";
		for ($i=1;(bool)($_POST['task'.$i]) ; $i++) { 
			if(isset($_POST['task'.$i])){
				if($msg_2 == ""){
					$msg_2 = "<li>".$_POST['task'.$i]."</li>";
				}else{
					$msg_2 = $msg_2."<li>".$_POST['task'.$i]."</li>";
				}
			}
		}		

		$final  = $msg1 . $msg_2."</ol>";
		// echo "$final";
		$sql = "INSERT INTO `tasks`(`tasks_completed`, `date`, `user_id`) VALUES ('".$final."','".date("Y-m-d")."','".$_SESSION["userid"]."')";
		// echo $sql;
		if(execute_query($sql, $conn)){
			header("location:home.html");
		} else{
			echo "not inserted";
		}
		
	}
		

