<?php
	include "db_conn.php";
	if(isset($_POST['insert_product'])) {
		
	$product_title = $_POST['product_title'];
	$product_cat = $_POST['product_cat'];
	$product_price = $_POST['product_price'];
	$product_description = $_POST['product_description'];
	
	
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp = $_FILES['product_image']['tmp_name'];
	
	
	
	$insert_product = "INSERT INTO products (product_cat, product_title, product_prize, product_desc, product_image) VALUES ('$product_cat', '$product_title', '$product_price', '$product_description', '$product_image')";
	
	
	$insert_pro = mysqli_query($conn, $insert_product);
	if ($insert_pro) {
		echo "<script>alert('Services has been inserted!')</script>";
		echo "<script>window.open('adminpanel.php','_self')</script>";
	}
	else{
		
		header("Location:adminpanel.php");
	}
	}	
else{
	header("Location:adminpanel.php");
	exit();
	}
	
	
	
	
	
 ?>