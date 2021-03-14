<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<?php
	include "cart_functions.php";
	
	?>

<html lang="en-UK">
<head>
<title>cart</title>
<link rel="stylesheet" href="carts1.css">
</head>
<body>
<div class="zero">
<img id="dog" src="images/d.png" alt="logo" width="200px" height="150px"/>
<p id="god">MON-FRI:10:00am-9:00pm SAT/SUN:9:00am-11:00pm<br> OPENING TIMINGS</p>
<p id="cow">CONTACT US<BR>+919562279623,+919532478575</p>
</div>
<div class="first">
<header>
<ul id="cat">
<li><a href="signin.php">SIGNIN/SIGN UP</a></li>
<li><a href="help.html">HELP?</a></li>
<li><a href="myaccount.php">MY ACCOUNT</a></li>
<li><a href="display.php">SERVICES</a></li>
<li><a href="home.php">HOME</a></li>
</ul>
</header>
</div>
<div class="a">
<br>
<br><br><br>
<form action="" method="post" enctype ="multipart/form-data" >
	<table align="center" width="100%" >
	<tr align="center">
	<th>CANCEL</th>
	<th>SERVICES</th>
	<th>DATE</th>
	<th>TIME</th>
	<th>TOTAL PRICE</th>
	</TR>
	
	<?php 
	
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
			$product_title= $pp_price['product_title'];
			$product_image= $pp_price['product_image'];
			$single_price= $pp_price['product_prize'];
	


	?>
	<tr align="center">
	<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
	<td><?php echo $product_title;?><br>  <img src="images/<?php echo $product_image; ?>" width="60px" height="60px"/></td>
	<td><input type="date" name="date" /></td>
	<td><input type="time" name="time"/></td>
	<td><?php echo "Rs.".$single_price;?></td>
	</tr>


<?php }

	} ?>
	<tr align="center">
	<td ><input type="submit" name ="update_cart" value="CANCEL"/></td>
	<td><input type="submit" name="continue" value="CONTINUE SHOPPING"/></td>
	<td ><input type="submit" name ="update_datetime" value="UPDATE DATE&TIME"/></td>
	<td><input type="submit" name="book" value ="BOOK APPOINTMENT"/></td>
	</tr>
</table>
</form>

<?php

	global $conn;
	$ip= getIp();
	
	if(isset($_POST['update_cart'])){
		foreach($_POST['remove']as $remove_id){
			$delete_product="DELETE FROM cart WHERE p_id='$remove_id' AND ip_add='$ip'";
			$run_delete = mysqli_query($conn, $delete_product);
			if($run_delete){
				
				echo"<script>window.open('cart.php','_self')</script>";
				
			}
		}
	}
	if(isset($_POST['continue'])){
		echo"<script>window.open('home.php','_self')</script>";
	}
?>
<?php

	if(isset($_POST['book'])){
		echo"<script>alert('Booked ur appiontment!!')</script>";
		echo"<script>window.open('cart.php','_self')</script>";

}
?>
</div>
<div class="o">
<p id="p">TOTAl PRICE: <?php total_price();?></p>
<p id="p">TOTAL ITEMS: <?php total_items();?></p>

</div>
</header>
<div class="fourth">
<div class="about">
<h1 id="b">About Us</h1>
<p>Gilmore Girls and STD. is a<br>place where you can have a<br>nice groomy session and relax.<br>LOVE!!</p>
</div>
<div class="address">
<p id="c">Address</p>
<p>#457,2nd main<br>near upanagara bus-stop,opp to lenskart<br>Yelahanka New-town,Bengaluru-560064<br>Karnataka.</p>
</div>
<div class="use">
<p id="d">Useful Links</p>
<ul id="e">
<li><a href="signin.php">SIGNIN/SIGN UP</a></li>
<li><a href="services.html">SERVICES</a></li>
<li><a href="help.html">HELP?</a></li>
</ul>
</div>
<div class="info">
<p id="f">Contact Info</p>
<p>+919562279623<br>+919532478575</p>
</div>
<div class="connect">
<p id="h">Mail-ID</p>
<a id="g" href="mailto:rekhabommishetty521@gmail.com">Write to us!</a>
</div>
<div class="im">
<img id="i" src="images/d.png" width="160px" height="140px"/>
</div>
</div>
</footer>
</body>
</html>
<?php
}
else{
	header("location:index.php");
	exit();
}
?>