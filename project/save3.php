<?php
class Registeruser
{
		function saveDetails($u,$n,$p,$a,$c){
			
			
			
			//creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into details(userid,name,address,phoneno,email)
			values('$u','$n','$p','$a','$c')";
			
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
$name=$_POST['nm'];
$address=$_POST['add'];
$phone=$_POST['ph'];
$email=$_POST['em'];
	$newuser=new RegisterUser;
	$newuser->saveDetails($userid,$name,$address,$phone,$email);
?>	