<?php

$con = mysqli_connect("localhost","root","","ecommerce")

//getting the categories

function getCats(){
	
	global $con;
	
	$get_cats="select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		
		$cat_id=$row_cats{'cat_id'};
		$cat_name=$row_cats{'cat_name'};
	
	echo "<li><a href='#'>$cat_title</a></li>";
		
	}
	
}
?>

		