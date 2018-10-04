<!DOCTYPE html>
<html lang = "en">
   
   <head>
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
	
	  
	  <link rel="stylesheet" type="text/css" href="css/style2.css"/>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
      <title>Bootstrap 101 Template</title>
      
      <!-- Bootstrap -->
      <link href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style class="text/css">
		body
		{
			background-image:url("web.jpg");
		}
		
		h1
		{
			font-family:Courier New;
			font-weight:bold;
				color:white;
						
		}
		p
		{
			color:Gainsboro ;
			font-family:Courier New;
		}
		#nav{
		font-family:"Times New Roman",Georgia, serif;
		color:yellow;
		
		
		}
		#25
		{
			width:5000px;
			
		}
			
		
	  
	  </style>
   </head>
   
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
				include_once "menu6.php";
			
				?>
				</div>
				<!--end navigation-->
		</div><!--end header row-->
		<br>
		<br>
	  
	 <center> <div class="row" id="25"><!--banner row-->
			<!--banner start-->
			<div class="col-md-12">
			<?php
				include_once "banner.php";
			
				?>
			
			</div>
			<!--end banner-->
		</div><!--end banner row--></center>
		<div class="row"><!--content--->
			<!--content-->
			<div class="col-md-12">
			<br>
			<br>
			<center><img src = "images/registration.jpg" class = "img-thumbnail"></center>
			<center><a href="reg.php"><h2>Customer Registration</h2></a></center>
			</div>
				
			</div>
			<!--end content--->
		</div><!--end content row--->
		<div class="row"><!--start footer-->
			<!--start footer--->
			<div class="col-md-12">
				<?php
				include_once "footer1.php";
			
				?>
			
			</div>
			<!--end footer--->
		</div><!--end hotel-->
		</div>
	  
	  
	  
	  
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
   </body>
</html>