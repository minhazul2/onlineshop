<?php
$host_name='localhost';
$name='root';
$pass='';
$db='shopp';

$con=mysqli_connect($host_name,$name,$pass) or die('database error');
mysqli_select_db($con,$db);






?>