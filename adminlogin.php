<!DOCTYPE HTML>
<HEAD>
<META CHARSET="utf-8">
	<title>user login</title>
	<link rel="stylesheet" type="text/css" href="loginstyles.css">
</head>
<body>
	<form action="adminlog.php" method="post">
		<h2>LOGIN</h2>
		<?php if(isset($_GET['error'])){?>
			<p class="error"><?php echo $_GET['error'];?> </p>	
		<?php } ?>
			
		<label>Email</label>
		<input type ="email" name="email" placeholder="email"><br>
		<label>Password</label>
		<input type ="password" name="password" placeholder="password"><br>
		<button type ="submit">Login</button>
				
	</form>
</body>
</html>