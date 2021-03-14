<!DOCTYPE HTML>
<HEAD>
<META CHARSET="utf-8">
	<title>user login</title>
	<link rel="stylesheet" type="text/css" href="loginstyles.css">
</head>
<body>
	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php if(isset($_GET['error'])){?>
			<p class="error"><?php echo $_GET['error'];?> </p>	
		<?php } ?>
			
		<label>User Name</label>
		<input type ="text" name="uname" placeholder="User Name"><br>
		<label>Password</label>
		<input type ="password" name="password" placeholder="password"><br>
		<button type ="submit">Login</button>
		<a href="signup.php" class="ca">Create an account</a>
				
	</form>

</body>
</html>