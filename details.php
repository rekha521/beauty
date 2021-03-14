<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>

<?php
	
	include "display_services.php";
	include "cart_functions.php";
	include "services.php";
	
	?>
<html lang="en-UK">
<head>
<title>services</title>
<link rel="stylesheet" href="displaydesign1.css"/>
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
<li id="cart"><a href="cart.php"><img src="images/cart.png" width="70px" height="60px"/></a></li>
<li><a href="signin.php">SIGNIN/SIGN UP</a></li>
<li><a href="help.html">HELP?</a></li>
<li><a href="myaccount.php">MY ACCOUNT</a></li>
<li><a href="display.php">SERVICES</a></li>
<li><a href="home.php">HOME</a></li>
</ul>
</header>
</div>

<div class="two">
		<div class="kee">
		<ul id="one">
		<li ><?php getcats();?></li>
		</ul>
		</div>

<div id="x">
	<div id="y">
	<?php

	if(isset ($_GET['pro_id'])){
		$product_id = $_GET['pro_id'];
		$get_pro= "SELECT * FROM products WHERE product_id='$product_id'";
		
		
		
	$run_pro= mysqli_query($conn, $get_pro);
	
	while($row_pro= mysqli_fetch_array($run_pro)){
		$pro_id = $row_pro['product_id'];
		$pro_desc = $row_pro['product_desc'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_prize'];
		$pro_image = $row_pro['product_image'];
		
		
		echo"
			<div id='single_product'>
				<h3>$pro_title</h3>
				<img src='images/$pro_image' width='400' height='300'/>
				<p><b>Rs. $pro_price</b></p>
				<p>$pro_desc</p>
				<a href='display.php' style='float:left;'>Go back</a>
				<a href='display.php?add_cart=$pro_id'> <button style='float:right;'>Add to cart</button></a>
			</div>
		";
	}
}
	?>
	</div>
</div>
</div>
<div>
<footer>
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
<li><a href="bridal.html">MY ACCOUNT</a></li>
<li><a href="help.html">HELP?</a></li>
<li><a href="home.php">HOME</a></li>
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