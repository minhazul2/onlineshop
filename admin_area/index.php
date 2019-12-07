<!DOCTYPE html>
<html>
<head>
<title>  </title>
<link rel="stylesheet" href="style4.css" media="all" />
</head>
<body>
<div class="wrapper">
<div class="header">
<a href="N.php"><h1>Register Here </h1></a>
<img src="styles/admin.jpg" height="130" width="600" style="float:right;"/>
</div>
<div id="left">

<?php 
include 'con4.php';
if(isset($_GET['insert_product'])){
	
	include("insert_product.php");
}
if(isset($_GET['view_products'])){
	
	include("view_product.php");
}
if(isset($_GET['edit_pro'])){
	
	include("edit_pro.php");
}
if(isset($_GET['view_cats'])){
	
	include("view_cats.php");
}
if(isset($_GET['edit_cat'])){
	
	include("edit_cat.php");
}
if(isset($_GET['view_customers'])){
	
	include("view_customers.php");
}
if(isset($_GET['view_orders'])){
	
	include("view_orders.php");
}
if(isset($_GET['view_payments'])){
	
	include("view_payments.php");
}
?>
<img src="styles/admin-banner.jpg" height="500" width="790" style="float:right;"/>
</div>
<h2>Manage Content </h2>
<div class="right">
<a href="index.php?insert_product">Insert New Product </a>
<a href="index.php?view_products">View all products </a>
<a href="index.php?view_cats">View all Categories </a>
<a href="index.php?view_brands"> View all Brands</a>
<a href="index.php?view_customers"> View Customer </a>
<a href="index.php?view_orders"> view orders </a>
<a href="index.php?view_payments"> view payments </a>
<a href="index.php">Admin logout</a>
</div>
</div>
</body>
</html>