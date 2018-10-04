<!DOCTYPE html>
<html lang = "en">
   
   <head>
   <link rel="stylesheet" type="text/css" href="css/style.css"/>
   <style>
  <style>
	
	h1{
	color:gray;
	}
	
	</style>
   </style>
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
	body{
		background-image:url(grass.jpg);
		background-size:cover;
	font-family:verdana;
	font-size:10px;
	margin:0;
	line-height:14px;
	background-repeat:no-repeat; 
	}
	#form{
		background-color:#84e184;
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
				include_once "menu4.php";
			
				?>
				</div>
				<!--end navigation-->
		</div><!--end header row-->
		<br>
		<div class="row"><!--table>
			<!--table-->
			<div class="col-md-6 col-md-offset-3" id="form" name="">
				<center><h1 class="addvenu">Payment</h1></center>
				<form>
					<div class="form-group">
						<label>Card no:-:</label>
						<input type="text" name="cno" class="form-control text" placeholder="Enter Card no">
					</div>
						<div class="form-group">
						<label>CVV no:-:</label>
						<input type="text" name="cv" class="form-control text" placeholder="Enter CVV no">
					</div>
						<div class="form-group">
						<label>Name on the Card:-:</label>
						<input type="text" name="name" class="form-control text" placeholder="Enter Name on Card">
					</div>
						<div class="form-group">
						<label>Expiration<br><br>
						MM/YY</label>
						<input type="text" name="exp" class="form-control text" placeholder="Enter Expiration MM/YY">
					</div>
				<div class="form-group">
				<center>
				<input type="button" value="pay" onclick="window.location.href='pay11.php'" class="btn btn-default" />
					</div>
					
				</form>
			</div>
			<!--end table--->
		</div><!--end table row--->
	  </div><!--end container-->
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
   </body>
</html>