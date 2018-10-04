<?php
class Registeruser
{
		function saveDetails($u,$n,$p,$a,$c,$r,$m){
			
			
			
			//creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into venue(name,address,phone,capacity,preferred,amount,image)
			values('$u','$n','$p','$a','$c','$r','$m')";
			
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
$name=$_POST['vn'];
$address=$_POST['va'];
$phone=$_POST['vp'];
$capacity=$_POST['vc'];
$preferred=$_POST['sc'];
$amount=$_POST['rs'];
$image=$_POST['txt'];
	$newuser=new RegisterUser;
	$newuser->saveDetails($name,$address,$phone,$capacity,$preferred,$amount,$image);
?>	