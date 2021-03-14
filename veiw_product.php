<table width="1000" align="center" bgcolor="pink">
	<tr align="center">
	<td colspan='6'><h2>Veiw all products here</h2></td><br>
	</tr>
	<tr>
	<th>S.No</th>
	<th>Title</th>
	<th>Image</th>
	<th>Price</th>
	<th>Delete</th>
	</tr>
	<?php
	include "db_conn.php";
	$get_pro = "SELECT * FROM products";
	$run_pro= mysqli_query($conn, $get_pro);
	$i=0;
	while ($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_title=$row_pro['product_title'];
		$pro_image=$row_pro['product_image'];
		$pro_price=$row_pro['product_prize'];
		$i++;
	
	?>
	
	<tr align='center'>
	<td><?php echo $i;?></td>
	<td><?php echo $pro_title;?></td>
	<td><img src="images/<?php echo $pro_image;?>" width="60" height="60"/></td>
	<td><?php echo $pro_price;?></td>
	<td><a href="delete_pro.php?delete_pro=<?php echo$pro_id;?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>