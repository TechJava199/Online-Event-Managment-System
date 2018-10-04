<?php
session_start();

if(isset($_SESSION["islogged"])==false)
{
    header("Location: login.php");
}


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
	#nav{
		font-family:"Times New Roman",Georgia, serif;
		
		
		
		}
	#form{
		background-color:#f0f0f0;
		min-height:700px;
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
				include_once "menu7.php";
			
				?>
				</div>
				<!--end navigation-->
		</div><!--end header row-->
		<br>
		<div class="row"><!--table>
			<!--table-->
			<div class="col-md-6 col-md-offset-3" id="form" name="">
				<center><h1 class="addvenu">Add Venue</h1></center>
				<form action="save5.php" method="post">
					<div class="form-group">
						<label>Venue Name:</label>
						<input type="text" name="vn" class="form-control text" placeholder="Enter Venue Name">
					</div>
					<div class="form-group">
						<label>Venu Address:</label>
						<input type="text" name="va" class="form-control text" placeholder="Enter Venue Address">
					</div>
					<div class="form-group">
						<label>Venu phoneno:</label>
						<input type="text" name="vp" class="form-control text" placeholder="Enter Venue phoneno">
					</div>
					<div class="form-group">
						<label>Capacity:</label>
						<input type="text" name="vc" class="form-control text" placeholder="Enter Venue capacity">
					</div>
					<div class="form-group">
					<label>Preferred For:</label>
						<select class="form-control" name="sc">
							<option value="all">All</option>
							<option value="marriage">Marriage</option>
							<option value="family function">Family Function</option>
							<option value="birthday party">Birthday party</option>
							<option value="anniversary party">Anniversary Party</option>
							<option value="farewell party">Farewell party</option>
							<option value="college events">College events</option>
						</select>
					</div>
					<div class="form-group">
						<label>Rs:</label>
						<input type="text" name="rs" class="form-control text" placeholder="Enter Venu amount">
					</div>
					<div class="form-group">
					<label>Image 1:</label>
						<input type="submit" class="btn btn-primary" value="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						<input type="submit" class="btn btn-primary" value="upload">
						
						
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" name="txt"></textarea>
					</div>
				<div class="form-group">
				<center>
				<input type="submit" class="btn btn-default" value="Add"></center>
						
						
						

					</div>
				</form>
			</div>
			<!--end table--->
		</div><!--end table row--->
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