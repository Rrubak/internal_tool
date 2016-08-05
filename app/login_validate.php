<?php
	include_once '../db/db_functions.php';
	session_start();
	function validate_input(){
		$conn = db_connect();
		$sql="SELECT * FROM users WHERE `email` ='".$_POST["email"]."' AND `password` = '".$_POST["password"]."'";
		$result = $conn->query($sql);
		if($row = $result->fetch_assoc()){
			$_SESSION["username"]=$row["username"];
			$_SESSION["userid"]=$row["id"];
			header("Location: ../view/home.php");

		} else{
			$_SESSION["verify"]="verify";
			header("Location: ../index.php");
		}
	}	
	validate_input();
	