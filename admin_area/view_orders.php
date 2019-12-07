<!DOCTYPE html>
<html>
<head>
<title>  </title>
<style type="text/css">
th,tr {border:3px groove #333;}
</style>
</head>
<body>
<table width="794"align="center" bgcolor="#FFCC99">
<tr align="center">
<td colspan="6"><h2>View all Orders </h2> </td>
</tr>
<tr align="center">
<th>Order.N </th>
<th>Customer</th>
<th>Invoice</th>
<th>product Id </th>
<th>Qty</th>
<th> status</th>
<th> Delete</th>
</tr>
<?php
include 'con4.php';
$get_orders="select * from pending_orders";
$run_orders=mysqli_query($con,$get_orders);
$i=0;
while($row_orders=mysqli_fetch_array($run_orders)){
	
	
	$c_id=$row_orders['customer_id'];
	$invoice=$row_orders['invoice_no'];
	$p_id=$row_orders['product_id'];
	$qty=$row_orders['qty'];
	$status=$row_orders['order_status'];
	
	
	
	$i++;
	
	


?>
<tr align="center">
<td><?php echo $i; ?></td>
<td>
<?php
$get_customer="select * from customers where customer_id='$c_id'";
$run_customer=mysqli_query($con,$get_customer);
$row_customer=mysqli_fetch_array($run_customer);
$customer_email=$row_customer['customer_email'];
echo $customer_email;
?>

</td>
<td bgcolor="#FFCCCC"><?php echo $invoice; ?></td>
<td><?php echo $p_id; ?></td>
<td><?php echo $qty; ?></td>
<td><?php 
if($status=='pending'){
	
	echo $status='pending';
	
}

else{
	
	echo $status='Complete';
}


 ?></td>
<td><a href="delete_order.php?delete_order=<?php echo $order_id; ?>">Delete</td>

</tr>
<?php  } ?>


</table>
</body>
</html>