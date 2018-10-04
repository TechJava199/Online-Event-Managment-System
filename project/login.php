<?php
session_start();

$error="";
$success="";

if(isset($_POST['uname'])){
$un=$_POST['uname'];
$p=$_POST['pass'];
}
if(isset($_POST['submit'])){
	if($un =="admin"){
		if($p == "password"){
			$error="";
			$success="welcome ADmin ";
			//redirect to another page
			$_SESSION["islogged"]=true;
			 
			header("Location: venu.php");
		}
		else
		{
			$error="invalid password";
			$success=" ";			
		}
	}
	else{
		$error="invalid Username";
		$success="";
	}
}









?>


<html>
<head>
<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<style type="text/css">
	body {
    background-image:url(images/pic2.jpg);
	background-size:cover;
	font-family:verdana;
	font-size:10px;
	margin:0;
	line-height:14px;
	background-repeat:no-repeat;
    }
</style>
<body>
	<div class="loginbox">
	<img src="images/12.png" class="avatar">
		<h1>Login Here</h1>
		<p class="error"><?php echo $error;?></p><p class="error"><?php echo $success;?></p>
		<form method="post">
			<p>Username</p>
			<input type="text" name="uname" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="pass" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<a href="#">Forgot Your password</a><br>
			<a href="#">Don't have an account</a>
		</form>
	
	</div>

</body>
</html>