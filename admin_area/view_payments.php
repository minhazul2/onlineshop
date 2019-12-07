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
<td colspan="6"><h2>View all Payments </h2> </td>
</tr>
<tr align="center">
<th>payment.No </th>
<th>Invoice</th>
<th>amount Paid </th>
<th>Payment Method</th>
<th>Ref No.</th>
<th>code</th>
<th>code</th>
</tr>
<?php
include 'con4.php';
$get_payments="select * from payments";
$run_payments=mysqli_query($con,$get_payments);
$i=0;
while($row_payments=mysqli_fetch_array($run_payments)){
	
	
	$payment_id=$row_payments['payment_id'];
	$invoice=$row_payments['invoice_no'];
	$amount=$row_payments['amount'];
	$payment_m=$row_payments['payment_mode'];
	$ref_no=$row_payments['payment_id'];
	$code=$row_payments['code'];
	$date=$row_payments['payment_date'];

	
	
	
	
	
	$i++;
	
	


?>
<tr align="center">
<td><?php echo $i; ?></td>

<td bgcolor="#FFCCCC"><?php echo $invoice; ?></td>
<td><?php echo $amount; ?></td>
<td><?php echo $payment_m; ?></td>
<td><?php echo $ref_no; ?></td>
<td><?php echo $code; ?></td>
<td><?php echo $date; ?></td>

</tr>
<?php  } ?>


</table>
</body>
</html>