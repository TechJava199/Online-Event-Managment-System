<!DOCTYPE html>
<html lang = "en">
   
   <head>
   <link rel="stylesheet" type="text/css" href="css/style2.css"/>
   		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
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
		img{
		width:460px;
		heiht:550px;
	}
	.text{
		height:43px;
	}
	label{
		font-size:18px;
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
				
		<div class="row"><!--content--->
			<!--content-->
			<div class="col-md-6 col-md-offset-3" id="form" name="">
			<center><u><h2>View Venue</h2></u></center>
			
				<div class = "dropdown">
   Venue Type:-
   <button type = "button" class = "btn dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown">
      Birhday Party
      <span class = "caret"></span>
   </button>
   
   <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu1">
      <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "marriage.php">Marriage</a>
      </li>
      
      <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "family.php">Family Function</a>
      </li>
      
      <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "birthday.php">
            Birthday Party
         </a>
      </li>
	  <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "anniversary.php">
            Anniversary Party
         </a>
      </li>
	  <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "farewell.php">
            Farewell Party
         </a>
      </li>
	  <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "college.php">
            college events
         </a>
      </li>
   </ul>
   
</div>
			
		<br>
		
			<div class = "dropdown">
   Venu:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button type = "button" class = "btn dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown">
      Xyz Ground
      <span class = "caret"></span>
   </button>
   
   <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu1">
      <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "#">select</a>
      </li>
      
      <li role = "presentation">
         <a role = "menuitem" tabindex = "-1" href = "bt.php">Xyz ground</a>
      </li>
   </ul>
   
</div>
			
			<h2><b>cost:-50000</b></h2>
		<img src = "729.jpg" class = "img-rounded">
		</div>
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