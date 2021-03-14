<?php
include "db_conn.php";
function getIp()
{
	$ip=$_SERVER['REMOTE_ADDR'];
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}

function cart(){
	if(isset($_GET['add_cart'])){
		global $conn;
		$ip = getIp();
		
		$pro_id = $_GET['add_cart'];
		$check_pro = "SELECT * FROM cart WHERE ip_add='$ip' AND p_id='$pro_id'";
		$run_check = mysqli_query($conn, $check_pro);
		if(mysqli_num_rows($run_check)>0){
			echo "";
		}
		else{
			$insert_pro = "INSERT INTO cart (p_id, ip_add) VALUES ('$pro_id', '$ip')";
			$run_pro = mysqli_query($conn, $insert_pro);
			echo"<script>window.open('display.php','_self')</script>";
		}
	}
}
function total_items(){

	if(isset($_GET['add_cart'])){
	
		global $conn;
		$ip = getIp();
		$get_items= "SELECT * FROM cart WHERE ip_add='$ip'";
		$run_items= mysqli_query($conn, $get_items);
		$count_items= mysqli_num_rows($run_items);
	}
	else {
		global $conn;
		$ip = getIp();
		$get_items= "SELECT * FROM cart WHERE ip_add='$ip'";
		$run_items= mysqli_query($conn, $get_items);
		$count_items= mysqli_num_rows($run_items);
			
		}

	echo $count_items;
}

function total_price(){
	$total = 0;
	global $conn;
	$ip = getIp();
	$sel_price = "SELECT * FROM cart WHERE ip_add='$ip'";
	$run_price = mysqli_query($conn, $sel_price);
	while($p_price= mysqli_fetch_array($run_price)){
		
		$pro_id = $p_price['p_id'];
		
		$pro_price= "SELECT * FROM products WHERE product_id='$pro_id'";
		
		$run_pro_price = mysqli_query($conn, $pro_price);
		while($pp_price=mysqli_fetch_array($run_pro_price)){
			$product_price= array($pp_price['product_prize']);
			$values = array_sum($product_price);
			$total +=$values;
		}
	}
	echo "Rs.".$total;
}
?>