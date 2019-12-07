<?php
include 'con4.php';
if(isset($_POST['edit_cat'])){
	$cat_id=$_GET['edit_cat'];
	$edit_cat="select * from categories where cat_id='$cat_id'";
	$run_edit=mysqli_query($con,$edit_cat);
	
	$row_edit=mysqli_fetch_array($run_edit);
	$cat_title=$row_edit['cat_title'];
	
	
	
}

?>
<!DOCTYPE html>
<html>
<head>
<title>  </title>
<style>
form{margin:15%;}
</style>
</head>
<body>
<form action="" method="post">
<b>Edit Category </b>
<input type="text"name="cat_title1" value="<?php echo $cat_title; ?>"/>
<input type="submit"name="update_cat" value="Update Category" />
</form>

</body>
</html>