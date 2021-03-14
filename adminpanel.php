<?php
session_start();
if(isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
?>

<!DOCTYPE html>
<html lang="en-UK">
<head>
<title>admin</title>
<link rel="stylesheet" href="admin1.css"/>
</head>
<body>
<div class="zero">
<img id="dog" src="images/d.png" alt="logo" width="200px" height="150px"/>
<p id="god">MON-FRI:10:00am-9:00pm SAT/SUN:9:00am-11:00pm<br> OPENING TIMINGS</p>
<p id="cow">CONTACT US<BR>+919562279623,+919532478575</p>
</div>
</header>
<div>
<div class="ba">
<ul id="bc">
<li><a href="adminpanel.php?insert_product">INSERT NEW PRODUCT<a></li>
<li><a href="adminpanel.php?veiw_product">VIEW ALL PRODUCTS<a></li>
<li><a href="adminpanel.php?veiw_customers">VIEW CUSTOMERS<a></li>
<li><a href="adminlogout.php">ADMIN LOGOUT<a></li>
</ul>
</div>
<div class="m">

<?php
	if(isset($_GET['insert_product'])){
		include("insert_product.php");
	}
	if(isset($_GET['veiw_product'])){
		include("veiw_product.php");
	}
	
	if(isset($_GET['veiw_customers'])){
		include("veiw_customers.php");
	}
?>
	
</div>
</div>
<footer>
<div class="fourth">
<div class="about">
<h1 id="b">About Us</h1>
<p>Gilmore Girls and STD. is a<br>place where you can have a<br>nice groomy session and relax.<br>LOVE!!</p>
</div>
<div class="use">
<p id="d">Useful Links</p>
<ul id="e">
<li><a href="signin.php">SIGNIN/SIGN UP</a></li>
<li><a href="services.html">SERVICES</a></li>
<li><a href="bridal.html">MY ACCOUNT</a></li>
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
<footer>
</body>
</html>
<?php
}
/* else{
	header("location:index.php");
	exit();
}*/
?>