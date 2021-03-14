 
 
 <?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>

<?php
	
	include "db_conn.php";
	
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
		<li ><a href="editaccount.php?edit_account">Edit Account</a></li>
		<li ><a href="changepassword.php?change_pass">Change password</a></li>
		<li ><a href="deleteaccount.php?delete_account">Delete Account</a></li>
		<li ><a href="logout.php">Logout</a></li>
		</ul>
		</div>

<div id="x">
	<div id="y">
		<form action="changep.php" method="post">
		<h2>CHANGE PASSWORD</h2>
		<?php if(isset($_GET['error'])){?>
			<p class="error"><?php echo $_GET['error'];?> </p>	
		<?php } ?>
			
		<?php if(isset($_GET['success'])){ ?>
			<p class="success"><?php echo $_GET['success']; ?> </p>	
		<?php } ?>
		<label>Old Password</label>
		<input type ="password" name="op" placeholder="Old Password"><br>
		<label>New Password</label>
		<input type ="password" name="np" placeholder="new password"><br>
		<label>Confirm New Password</label>
		<input type ="password" name="c_np" placeholder="confirm new password"><br>
		<button type ="submit">Change</button><br>
				
	</form>

	
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
<li><a href="bridal.html">BRIDAL PACKAGES</a></li>
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