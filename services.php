 <?php
include"db_conn.php";
function getcats(){ 
	global $conn;
	$get_cats="select * from categories";
	$run_cats=mysqli_query($conn, $get_cats);
	while($row_cats=mysqli_fetch_array($run_cats))
	{
	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];

	echo"<li><a href='display.php?cat=$cat_id'>$cat_title</a></li>";
	}
}

?>