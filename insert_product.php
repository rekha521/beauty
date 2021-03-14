<!DOCTYPE html>
<?php
include ("db_conn.php");
?>
<HEAD>
<META CHARSET="utf-8">
	<title>insert</title>
	<link rel="stylesheet" type="text/css" href="insertstyles.css">
</head>
<body>
	
	<form action="insert.php" method="post" enctype="multipart/form-data">
		<h1> Inserting Product</h1><br><br>
		<label>Product Title</label>
		<input type ="text" name="product_title" required ><br>
		<label>Product Category</label><br>
		<select name="product_cat" required>
			<option>Select a categeory</option>
			<?php
			$get_cats="select * from categories";
			$run_cats=mysqli_query($conn, $get_cats);
			while($row_cats=mysqli_fetch_array($run_cats))
				{
					$cat_id=$row_cats['cat_id'];
					$cat_title=$row_cats['cat_title'];

					echo"<option value='$cat_id'>$cat_title</option>";
				}
			?>

		</select><br>
		<label>Product Image</label>
		<input type ="file" name="product_image" required><br>
		<label>Product price</label>
		<input type ="text" name="product_price" required ><br>
		<label>Product Description</label><br>
		<textarea name="product_description" cols="60" rows="10" ></textarea>
		<br>
		<button type ="submit" name="insert_product">INSERT</button><br>
	</form>
</body>
</html>