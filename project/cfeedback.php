<!DOCTYPE html>
<html lang = "en">
   
   <head>
     <link rel="stylesheet" type="text/css" href="css/style2.css"/>
   		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
	 #nav{
		font-family:"Times New Roman",Georgia, serif;
		
		
		
		}
	*
	{margin:0;
	padding:0;
	}
	
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
				<center><u><h2>Details</h2></u></center>
		<div class="row"><!--content--->
			<!--content-->
			<div class="col-md-12">
				<form action="save4.php" method="post">
				<hr/>
				<div class = "form-group">
				<label for = "name">Date</label>
				<input type = "text" class = "form-control" id = "name" placeholder = "Enter date" name="uname">
				</div>
				<hr/>
				 <div class = "form-group">
				<label for = "name">Feedback:-</label>
				<textarea class = "form-control" rows = "3" name="add"></textarea>
				</div>
				<hr/>
				<center>
				<div class="form-group">
						<input type="submit" class="btn btn-primary" value="submit"></center>
				</form>
				
				
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
	  </div><!--end container-->
	  </div>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
   </body>
</html>