<?php
session_start();
?>
<?php
class Registeruser
{
		function saveDetails($u,$n,$t,$a,$c,$e,$pa,$cp,$cm,$cf,$ct,$cc,$mm){
			
			
			
			//creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into booking(username,bookingid,eventtype,eventplace,noofguests,date,equipmenttype,type,lunchtype,dinnertype,lighitings,flowers,seating)
			values('$u','$n','$t','$a','$c','$e','$pa','$cp','$cm','$cf','$ct','$cc','$mm')";
		
			
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
$username=$_SESSION['username'];
$userid=$_POST['uname'];
$name=$_POST['mn'];
$phone=$_POST['ep'];
$address=$_POST['ph'];
$city=$_POST['em'];
$email=$_POST['et'];
$password=$_POST['gen'];
$confirmpassword=$_POST['lt'];
$con=$_POST['dt'];
$confirm=$_POST['lg'];
$ram=$_POST['fl'];
$venu=$_POST['se'];
	$newuser=new RegisterUser;
	$newuser->saveDetails($username,$userid,$name,$phone,$address,$city,$email,$password,$confirmpassword,$con,$confirm,$ram,$venu);
?>	