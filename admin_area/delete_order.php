<?php
include 'con4.php';
if(isset($_GET['delete_order'])){
	
	$delete_id=$_GET['delete_order'];
	
	$delete_pro="delete from pending_orders where order_id='$delete_id'";
	$run_delete=mysqli_query($con,$delete_pro);
	
	if($run_delete){
		
		echo "<script>alert('One product has been deleted!')</script>";
		echo "<script>window.open('index.php?view_products','_self')</script>";
		
	}
	
	
}





?>