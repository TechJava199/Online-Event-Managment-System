<?php
class Registeruser
{
		function saveDetails($u,$n,$p,$a,$c,$e,$pa,$cp){
			
			
			
			//creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into register(userid,name,phone,address,city,email,password,confirmpassword)
			values('$u','$n','$p','$a','$c','$e','$pa','$cp')";
			
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
$userid=$_POST['ud'];
$name=$_POST['nm'];
$phone=$_POST['ph'];
$address=$_POST['ad'];
$city=$_POST['ct'];
$email=$_POST['em'];
$password=$_POST['pass'];
$confirmpassword=$_POST['cpass'];
	$newuser=new RegisterUser;
	$newuser->saveDetails($userid,$name,$phone,$address,$city,$email,$password,$confirmpassword);
?>	