<?php
include 'con5.php';


?>
<html> 

<head> 
<script> 
function GEEKFORGEEKS()                                    
{ 
    var name = document.forms["RegForm"]["name"];               
    var email = document.forms["RegForm"]["email"];    
    var phone = document.forms["RegForm"]["phone"];  
    var what =  document.forms["RegForm"]["Subject"];  
    var password = document.forms["RegForm"]["password"];  
    var address = document.forms["RegForm"]["address"];  
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
   
    if (address.value == "")                               
    { 
        window.alert("Please enter your address."); 
        name.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
	if (email.value.indexOf("gmail", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 

   
    if (phone.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        phone.focus(); 
        return false; 
    } 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter your password"); 
        password.focus(); 
        return false; 
    } 
   
    if (what.selectedIndex < 1)                  
    { 
        alert("Please enter your course."); 
        what.focus(); 
        return false; 
    } 
   
    return true; 
}</script> 
  

<link rel="stylesheet"href="N2.css"></link>
</head> 
   
<body id="GEEKFORGEEKS"> 
<h1 style="text-align: center"> REGISTRATION FORM </h1>           
<form name="RegForm" action="N.php" onsubmit="return GEEKFORGEEKS()" method="post" id="form">  
<div id="div">
      
    <p>Name: <input type="text" size=65 name="name"> </p><br>        
    <p> Address: <input type="text" size=65 name="address">  </p><br> 
    <p>E-mail Address: <input type="text" size=65 name="email">  </p><br> 
     <p>Password: <input type="text" size=65 name="password"> </p><br> 
	<p> Confirm Password: <input type="text" size=65 name="cpassword"> </p><br> 
     <p>Phone Number</p>
  <label for="phonenum">Phone Number (format: xxxxx-xxxxxx):</label><br/>
  <input id="phonenum"name="phone" type="tel" pattern="^\d{5}-\d{6}$" required >
  	
           
   <br><br> 
    <p>Comments:  <textarea cols="55" name="Comment">  </textarea></p> 
    <p><input type="submit" value="send" name="reg">      
        <input type="reset" value="Reset" name="Reset">   
    </p>   
</div>	
</form> 
<?php
if(isset($_POST['reg'])){
	function input($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	
	$name=input($_POST['name']);
	$address=input($_POST['address']);
	$email=input($_POST['email']);
	$pass=input($_POST['password']);
	$cpass=input($_POST['cpassword']);
	$phone_number=input($_POST['phone']);
	$comment=input($_POST['Comment']);
	
	
	
	
	if( $pass=$cpass) {
		
		$query="select*from reg3 where email='$email'";
		$query_check=mysqli_query($con,$query);
		
		if($query_check){
			
			if(mysqli_num_rows($query_check)>0){
				echo"
				<script>
				alert('Email Already In Used');
				window.location.href='login4.php';
				
				</script>
				
				";
				
				
			}else{
				$insertion="insert into reg3 values('$name','$address','$email','$pass','$cpass','$phone_number','$comment')";
				$run=mysqli_query($con,$insertion);
				
				if($run){
					echo"
				<script>
				alert('You are successfully Registered');
				window.location.href='login4.php';
				
				</script>
				
				";
					
				}else{
					
					echo"
				<script>
				alert('connection failed');
				window.location.href='N.php';
				
				</script>
				
				";
					
					
					
					
				}
				
				

				
			}
		}else{
			echo"
				<script>
				alert('Database Error');
				window.location.href='N.php';
				
				</script>
				
				";
			
			//query_check
		}
		
	}else{
		echo"
				<script>
				alert('password and confirm password doesn't match');
				window.location.href='N.php';
				
				</script>
				
				";
		
		
		
		
	}
	
	
	
}else{
	
	
}



?>







</body> 
</html> 
