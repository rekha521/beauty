<table width="1000" align="center" bgcolor="pink">
	<tr align="center">
	<td colspan='6'><h2>VEIW ALL CUSTOMERS</h2></td>
	</tr>
	<tr>
	<th>S.No</th>
	<th>NAME</th>
	<th>USER NAME</th>
	<th>Delete</th>
	</tr>
	<?php
	include "db_conn.php";
	$get_c = "SELECT * FROM users";
	$run_c= mysqli_query($conn, $get_c);
	$i=0;
	while ($row_c=mysqli_fetch_array($run_c)){
		$c_id=$row_c['id'];
		$c_name=$row_c['name'];
		$c_uname=$row_c['user_name'];
		$i++;
	
	?>
	
	<t align='center'>
	<td><?php echo $i;?></td>
	<td><?php echo $c_name;?></td>
	<td><?php echo $c_uname;?></td>
	<td><a href="delete_c.php?delete_c=<?php echo$c_id;?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>