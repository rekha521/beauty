<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
	
include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
	
	if(empty($op)){
		header("location: changepassword.php?error=old password is required");
		exit();
	}else if(empty($np)){
		header("location: changepassword.php?error=new password is required");
		exit();
		
	}else if($np !== $c_np){
		header("location: changepassword.php?error=confirm password doesnot match the new password");
		exit();
	}else{
		$op = md5($op);
		$np = md5($np);
		$id = $_SESSION['id'];
		
		$sql =" SELECT password FROM users WHERE id='$id' and password='$op'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)===1)
		{
			$sql_2 = "UPDATE users SET password ='$np' WHERE id='$id'";
			mysqli_query($conn, $sql_2);
			header("location: changepassword.php?success=your password changed successfully");
			exit();	
		}else {
			header("location: changepassword.php?error=incorrect password");
			exit();	
		}
	}
	}
else{
	header("location:myaccount.php");
	exit();
}
}

else{
	header("location:home.php");
	exit();
}
?>