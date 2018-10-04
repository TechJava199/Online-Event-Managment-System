<?php
class Registeruser
{
		function saveDetails($u,$n,$t,$a,$c,$e,$pa,$cp,$cm,$cf,$ct,$cc){
			
			
			
			//creating mysql connection with server
			$conn=new mysqli("localhost","root","","collegedb");
			// create query
			$sql="insert into book1(bookingid,eventtype,eventplace,noofguests,date,equipmenttype,type,lunchtype,dinnertype,lighitings,flowers,seating)
			values('$u','$n','$t','$a','$c','$e','$pa','$cp','$cm','$cf','$ct','$cc')";
			
			//echo "the event $n $p $a $c $e $pa $cp $cm $cf $ct $cc";
			
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
	$newuser->saveDetails($userid,$name,$phone,$address,$city,$email,$password,$confirmpassword,$con,$confirm,$ram,$venu);
?>	