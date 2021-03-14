<?php
session_start();
include "db_conn.php";
if(isset($_POST['email']) && isset($_POST['password'])) {
	function validate($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	
	$uname = validate($_POST['email']);
	$pass = validate($_POST['password']);
	
	if (empty($uname)){
		header("Location:adminlogin.php?error=user name is required");
		exit();		
	}
	else if(empty($pass)){
		header("Location:adminlogin.php?error=password is required");
		exit();
	}
	else {
		
		$sql = "SELECT * FROM admins WHERE user_email= '$uname' AND user_pass='$pass'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)=== 1){
			$row = mysqli_fetch_assoc($result);
			if ($row ['user_email'] ===$uname && $row['user_pass']=== $pass){
				$_SESSION['user_email']=$row['user_email'];
				$_SESSION['user_id']=$row['user_id'];
				header("Location:adminpanel.php");
				exit();
			}
			else{
			header("Location:adminlogin.php?error=Incorrect user name or password");
			exit();
			}
		}
		else{
			header("Location:adminlogin.php?error=Incorrect user name or password");
			exit();
		}
	}
}	
else{
	header("Location:adminlogin.php");
	exit();
}
?>