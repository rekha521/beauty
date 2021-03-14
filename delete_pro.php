<?php
	include "db_conn.php";
	if(isset($_GET['delete_pro'])){
		$delete_id=$_GET['delete_pro'];
	}
	$delete_pro= "delete from products where product_id='$delete_id'";
	$run_delete= mysqli_query($conn , $delete_pro);
	
	if($run_delete){
		echo"<script>alert('delete a product')</script>";
		echo"<script>window.open('adminpanel.php?view_products','_self')</script>";
	}
	
	?>