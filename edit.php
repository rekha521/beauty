<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
	
include "db_conn.php";

if (isset($_POST['ou']) && isset($_POST['nu'])
    && isset($_POST['n']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$ou = validate($_POST['ou']);
	$nu = validate($_POST['nu']);
	$n = validate($_POST['n']);
	
	if(empty($ou)){
		header("location: editaccount.php?error=old user name is required");
		exit();
	}else if(empty($nu)){
		header("location: editaccount.php?error=new user name is required");
		exit();
		
	}else if(empty($n)){
		header("location: editaccount.php?error=name is required");
		exit();
	}else{
		$id = $_SESSION['id'];
		
		$sql =" SELECT user_name FROM users WHERE id='$id' and user_name='$ou'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)===1)
		{
			$sql_2 = "UPDATE users SET user_name ='$nu', name='$n' WHERE id='$id'";
			mysqli_query($conn, $sql_2);
			header("location: editaccount.php?success=updated successfully");
			exit();	
		}else {
			header("location: editaccount.php?error=incorrect user name");
			exit();	
		}
	}
	}
else{
	header("location:editaccount.php");
	exit();
}
}

else{
	header("location:home.php");
	exit();
}
?>