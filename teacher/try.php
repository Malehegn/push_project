<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">
$().ready(function() {
	// validate signup form on keyup and submit
	$("#signupForm").validate({
		rules: {
		
			cpassword: {
				required: true,
				minlength: 5
			},
			
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			
			agree: "required"
		},
		messages: {
		
			cpassword: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			
			agree: "Please accept our policy"
		}
	});
});
</script>
<style>
	.cpassword{color:#FF0000;}
</style>
<body>
  <form class="cmxform" id="signupForm" method="Post" action="">
						<fieldset>
							<legend>Validating a complete form</legend>
							<p>
								<label for="username" style="color:#FF0000;">Username:</label>
								<input id="username" name="username" type="text" style="margin-left: 0px;"/>
								
								
							</p>
							<p>
								<label for="cpassword" style="color:#FF0000;">Current Password:</label>
								<input id="cpassword" name="cpassword" type="cpassword" style="margin-left: 0px;"/>
								
								
							</p>
							
							<p>
								<label for="password" style="color:#FF0000;">Password:</label>
								<input id="password" name="password" type="password" style="margin-left: 46px;"/>
							</p>
							<p>
								<label for="confirm_password" style="color:#FF0000;">Confirm password:</label>
								<input id="confirm_password" name="confirm_password" type="password" />
							</p>
										
							<input class="submit" type="submit" value="Submit"/>
							</p>
						</fieldset>
					</form>	



<?php  

session_start(); 

include ("db.php");  

$username = $_POST['username']; 
$password = $_POST['cpassword']; 
$newpassword = $_POST['password']; 
$confirmnewpassword = $_POST['confirm_password']; 

$result = mysql_query("SELECT password FROM teacher WHERE UserName='$username'"); 
if(!$result)  
{  
echo "The username you entered does not exist";  
}  
else  
if($password!= mysql_result($result, 0))  
{  
echo "You entered an incorrect password";  
}  
if($newpassword=$confirmnewpassword)  
    $sql=mysql_query("UPDATE teacher SET password='$newpassword' where UserName='$username'");  
    if($sql)  
    {  
    echo "Congratulations You have successfully changed your password";  
    } 
else 
{  
echo "The new password and confirm new password fields must be the same";  
}   
?>
</body>
</html>
