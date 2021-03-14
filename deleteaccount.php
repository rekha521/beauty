

<h1 style= "text-align:center;"> DO YOU REALLY WANT TO DELETE ACCOUNT</h1><br><br>
<center>	<form action ="" method="post">
		<input type ="submit" name= "yes" value="yes I want"/>
		<input type ="submit" name= "no" value="no"/>
		
<form></center>
		
		
<?php
include "db_conn.php";

	
	if(isset($_POST['yes'])){
		$user = $_SESSION['user_name'];
		$delete_customer ="DELETE FROM users WHERE user_name='$user'";
		mysqli_query($conn, $delete_customer);
		
		echo "<script>alert('Your account has been deleted')</script>";
		echo "<script>window.open('index.php','self')</script>";
	}
	if(isset($_POST['no'])){
		$user = $_SESSION['user_name'];
		echo "<script>alert('Account not deleted')</script>";
		echo "<script>window.open('myaccount.php','self')</script>";

	}
?>