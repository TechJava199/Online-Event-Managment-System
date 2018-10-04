<?php
class Registeruser
{
		function saveDetails($u,$p){
			
			// creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into login(username,password)
			values('$u','$p')";
			
			//execute query
			
			$conn->query($sql);
			
			//close connection
			
			$conn->close();
			
			//redirect to thank you page
			
			header("Location: thankyou.php");
			
		}



}
?>
<?php
$un=$_POST["uname"];
$p=$_POST["pass"];
	$newuser=new RegisterUser;
	$newuser->SaveDetails($un,$p);
?>