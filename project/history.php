<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
   
   <head>
  <link rel="stylesheet" type="text/css" href="css/style2.css"/>
   		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title>Bootstrap 101 Template</title>
      
      <!-- Bootstrap -->
      <link href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <style type="text/css">
	#form{
		background-color:#f0f0f0;
		min-height:900px;
		min-width:1200px;
		
		padding:5px 40px 40px 40px;
	}
	.addvenue{
		font-size:55px;
		font-family:Agency FB;
		font-weight:700;
		border-bottom-style:ridge;
	}
	.text{
		height:43px;
	}
	label{
		font-size:18px;
	}
	#nav{
		font-family:"Times New Roman",Georgia, serif;
		
		
		
		}
	
   </style>
   
   <body>
       <div class="w3-container w3-light-grey">
	  <div class="container"><!--start container-->
		<div class="row"><!--start first row-->
			<!--start header-->
			<div class="col-md-12">
			<?php
			include_once "header.php";
			
			?>
			</div>
			<!--end header--->
			
		</div><!--end first row--->
		<div class="row"><!--header row-->
			<!--navigation-->
				<div class="col-md-12">
				<?php
				include_once "menu5.php";
			
				?>
				</div>
				<!--end navigation-->
		</div><!--end header row-->
		<br>
		<div class="row"><!--table>
			<!--table-->
			<div class="col-md-6" id="form" name="">
				<center><h1 class="addvenu">Booking</h1></center>
				<hr/>
				<?php
						$u=$_SESSION['username'];
						$conn=new mysqli("localhost","root","","collegedb");
						$resultset=$conn->query("select *from booking where username=$u");
						
						echo "<table class='table table-stripped'>";
						echo "<th>SNO</th>";
						echo "<th>Username</th>";
						echo "<th>B_id</th>";
						echo "<th>eventtype</th>";
						echo "<th>eventplace</th>";
						echo "<th>Noofguest</th>";
						echo "<th>date</th>";
						echo "<th>equipmenttype</th>";
						echo "<th>food</th>";
						echo "<th>lunchtype</th>";
						echo "<th>dinnertype</th>";
						echo "<th>lighiting</th>";
						echo "<th>flowers</th>";
						echo "<th>seating</th>";
						while($row=mysqli_fetch_array($resultset))
						{
							echo "<tr>";
							echo "<td>$row[0]</td>";
							echo "<td>$row[1]</td>";
							echo "<td>$row[2]</td>";
							echo "<td>$row[3]</td>";
							echo "<td>$row[4]</td>";
							echo "<td>$row[5]</td>";
							echo "<td>$row[6]</td>";
							echo "<td>$row[7]</td>";
							echo "<td>$row[8]</td>";
							echo "<td>$row[9]</td>";
							echo "<td>$row[10]</td>";
							echo "<td>$row[11]</td>";
							echo "<td>$row[12]</td>";
							echo "<td>$row[13]</td>";
							echo "</td>";
						}
						echo "</table>";
					
					?>
			</div>
			<!--end table--->
		</div><!--end table row--->
		<div id="msg">
	
	
	</div>
	<div class="row"><!--start footer-->
			<!--start footer--->
			<div class="col-md-12">
				<?php
				include_once "footer1.php";
			
				?>
			
			</div>
			<!--end footer--->
		</div><!--end hotel-->
	  </div><!--end container-->
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
   </body>
</html>