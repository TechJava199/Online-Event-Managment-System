<?php
class Registeruser
{
		function saveDetails($u,$n){
			
			
			
			//creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into feed(date,fd)
			values('$u','$n')";
			
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
$userid=$_POST['uname'];
$address=$_POST['add'];
	$newuser=new RegisterUser;
	$newuser->saveDetails($userid,$address);
?>	