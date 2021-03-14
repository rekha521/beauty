<?php
	include "db_conn.php";
	if(isset($_GET['delete_c'])){
		$delete_id=$_GET['delete_c'];
	}
	$delete_c= "delete from users where id='$delete_id'";
	$run_delete= mysqli_query($conn , $delete_c);
	
	if($run_delete){
		echo"<script>alert('delete a customer')</script>";
		echo"<script>window.open('adminpanel.php?view_products','_self')</script>";
	}
	
	?>