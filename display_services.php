<?php
include "db_conn.php";

function getpro(){
	
	if (!isset($_GET['cat'])){
	global $conn;
	
	$get_pro= "SELECT * FROM products ORDER BY RAND()";
	$run_pro= mysqli_query($conn, $get_pro);
	
	while($row_pro= mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_prize'];
		$pro_image = $row_pro['product_image'];
		
		
		echo"
			<div id='single_product'>
				<h3>$pro_title</h3>
				<img src='images/$pro_image' width='180' height='180'/>
				<p><b>price: Rs.$pro_price</b></p>
				<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
				<a href='display.php?add_cart=$pro_id'> <button style='float:right;'>Add to cart</button></a>
			</div>
		";
	}

}
}


function getcatpro(){
	
	if (isset($_GET['cat'])){
		$cat_id=$_GET['cat'];
		
	global $conn;
	
	$get_cat_pro= "SELECT * FROM products WHERE product_cat='$cat_id'";
	$run_cat_pro= mysqli_query($conn, $get_cat_pro);
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	if($count_cats==0){
		echo "<h2>There is no product in this category!</h2>";
		exit();
	}
	while($row_cat_pro= mysqli_fetch_array($run_cat_pro)){
		$pro_id = $row_cat_pro['product_id'];
		$pro_cat = $row_cat_pro['product_cat'];
		$pro_title = $row_cat_pro['product_title'];
		$pro_price = $row_cat_pro['product_prize'];
		$pro_image = $row_cat_pro['product_image'];
		
		
		echo"
			<div id='single_product'>
				<h3>$pro_title</h3>
				<img src='images/$pro_image' width='180' height='180'/>
				<p><b>Price: Rs.$pro_price</b></p>
				<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
				<a href='display.php?add_cart=$pro_id'> <button style='float:right;'>Add to cart</button></a>
			</div>
		";
	}

}
}



?>